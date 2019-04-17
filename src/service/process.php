<?php
session_start();
// Controle des forms et datas passées dans le GET


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // action

    // init des sessions
    if(isset($_POST['player1_name']) && !empty($_POST['player1_name']) && isset($_POST['player2_name']) && !empty($_POST['player2_name'])) {
        $_SESSION['player1']['name'] = $_POST['player1_name'];
        $_SESSION['player2']['name'] = $_POST['player2_name'];
        header('location: /public/personnage.php');
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
                            if ($_SESSION['player'.$i]['posX'] > 6) {
                                $_SESSION['player'.$i]['posX'] = 5;
                            }
                            break;
                        case 'down' :
                            $_SESSION['player'.$i]['posY'] += 1;
                            if ($_SESSION['player'.$i]['posY'] > 6) {
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
        header('location: /public/map.php');
    }


}


