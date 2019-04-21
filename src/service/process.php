<?php

use GuzzleHttp\Client;

require '../../vendor/autoload.php';


session_start();


// Controle des forms et datas passées dans le GET

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // action

    // init des sessions
    if(isset($_POST['player1_name']) && !empty($_POST['player1_name']) && isset($_POST['player2_name']) && !empty($_POST['player2_name'])) {
        for ($i = 1; $i <= 2; $i++) {
            //init players
            $_SESSION['player'.$i]['name'] = $_POST['player'.$i.'_name'];
            $_SESSION['player'.$i]['eggCount'] = 0;
            $_SESSION['player'.$i]['posX'];
            $_SESSION['player'.$i]['posY'];
        }

        // init Session egg

        $_SESSION['eggs']= [];
        for($i=0;$i<5;$i++){
            $_SESSION['eggs']['egg'.($i+1)]= array();
            $_SESSION['eggs']['egg'.($i+1)]['alive']=true;
        }
        // init array

        $_SESSION['persos'] = [];
        for ($i = 0; $i < 12; $i++) {
            $_SESSION['persos'][] = selectRandomPerso();
        }
        $_SESSION['persos'] = array_map("get_object_vars", $_SESSION['persos']);

        header('location: /public/init.php');
    } else {
        header('location: /public/index.php');
    }
}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET['d'])) {
        for ($i=1 ; $i <=2; $i++) {
            if (isset($_SESSION['player'.$i]['posX']) && isset($_SESSION['player'.$i]['posY'])) {
                if ($_GET['p'] == $i) {
                    switch ($_GET['d']) {
                        case 'up' :
                            $_SESSION['player'.$i]['posY'] -= 1;
                            if ($_SESSION['player'.$i]['posY'] <= 0) {
                                $_SESSION['player'.$i]['posY'] = 0;
                            }
                            break;
                        case 'right' :
                            $_SESSION['player'.$i]['posX'] += 1;
                            if ($_SESSION['player'.$i]['posX'] > 5) {
                                $_SESSION['player'.$i]['posX'] = 5;
                            }
                            break;
                        case 'down' :
                            $_SESSION['player'.$i]['posY'] += 1;
                            if ($_SESSION['player'.$i]['posY'] > 5) {
                                $_SESSION['player'.$i]['posY'] = 5;
                            }
                            break;
                        case 'left' :
                            $_SESSION['player'.$i]['posX'] -= 1;
                            if ($_SESSION['player'.$i]['posX'] <= 0) {
                                $_SESSION['player'.$i]['posX'] = 0;
                            }
                            break;
                    }
                }
            }
        }
        $_SESSION['count']++;
        header('location: /public/map.php');
    }

}

function selectRandomPerso() {
    $client = new GuzzleHttp\Client([
        'base_uri' => 'http://easteregg.wildcodeschool.fr/api/'
    ]);
    $response = $client->request('GET', 'characters/random');
    // or

    $body = $response->getBody();

    return json_decode($body->getContents());
}

