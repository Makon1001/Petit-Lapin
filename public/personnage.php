<?php

use GuzzleHttp\Client;
function selectRandomPerso() {
    $client = new GuzzleHttp\Client([
        'base_uri' => 'http://easteregg.wildcodeschool.fr/api/'
    ]);
    $response = $client->request('GET', 'characters/random');
    // or

    $body = $response->getBody();

    return json_decode($body->getContents());
}


require '../vendor/autoload.php';
include 'inc_head.php';
include 'connexionApi.php';
choixPlayer();

function bouton(){
    if (!empty($_SESSION["player2"]["champion"])){
        echo '<a href="index.php" class="btn btn-primary" >Prêt pour le combat ??</a>';
    }else{?>
        <button type="submit" class="btn btn-primary" name="submit" value="<?php echo recupIdChampion();?>"><?php checkplayer();?></button><?php
    }
}
?>
    <form method="get">
        <div class="container_fluid">
            <div class="row">
                <div class="col-md-3 text-center">
                    <h2>Player One</h2>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <?php
                        for ($i=1;$i<=12;$i++){
                            $value[$i]=selectRandomPerso();
                            $value[$i] = get_object_vars($value[$i]);
                            echo '<div class="col-2"><a href="?id='.$value[$i]["id"].'" ><img src="'.$value[$i]["image"].'" alt="..." class="img-thumbnail"><p>'.$value[$i]["name"].'</p></a></div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <h2>Player Two</h2>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <?php bouton() ?>
            </div>
        </div>
    </form>
<?php
function checkplayer()
{
    if(empty($_SESSION["player1"]["champion"])) {
        echo 'Choix player 1';
    }else{
        echo 'Choix player 2';
    }
}
function recupIdChampion(){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        return $id;
    }
}
function choixPlayer(){
    if(isset($_GET['submit'])){
        if(empty($_SESSION["player1"]["champion"])){
            $_SESSION["player1"]["champion"]=$_GET['submit'];
            return $_SESSION["player1"]["champion"];
        }else{
            $_SESSION["player2"]["champion"]=$_GET['submit'];
            return $_SESSION["player2"]["champion"];
        }
    }
}

include 'inc_script.php';