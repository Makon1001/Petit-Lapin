<?php

require '../vendor/autoload.php';
include 'inc_head.php';
include 'connexionApi.php';


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
function recupChampion1(){
    if(isset( $_SESSION['player1']['champion'])){
        $client = new GuzzleHttp\Client([
            'base_uri' => 'http://easteregg.wildcodeschool.fr/api/'
        ]);
        $concat= "characters/".$_SESSION['player1']['champion'];
        $response = $client->request('GET',$concat );

        $body = $response->getBody();
        $champion=get_object_vars(json_decode($body->getContents()));
        $_SESSION['player1']['imgSrc']=$champion["image"];
        return '<img src='.$_SESSION['player1']['imgSrc'].' alt="..." class="persoImg">';
    }
}
function recupChampion2(){
    if(isset( $_SESSION['player2']['champion'])){
        $client = new GuzzleHttp\Client([
            'base_uri' => 'http://easteregg.wildcodeschool.fr/api/'
        ]);
        $concat= "characters/".$_SESSION['player2']['champion'];
        $response = $client->request('GET',$concat );

        $body = $response->getBody();
        $champion=get_object_vars(json_decode($body->getContents()));
        $_SESSION['player2']['imgSrc']=$champion["image"];
        return '<img src='.$_SESSION['player2']['imgSrc'].' alt="..." class="persoImg">';
    }
}

choixPlayer();

function bouton(){
    if (!empty($_SESSION["player2"]["champion"])){
        echo '<a href="map.php" class="btn btn-danger btn-perso-select" >Prêt pour le combat ??</a>';
    }else{?>
        <button type="submit" class="btn btn-primary btn-perso-select" name="submit" value="<?php echo recupIdChampion();?>"><?php checkplayer();?></button><?php
    }
}
?>
    <header class="jumbotron text-center text-white bg-dark">
        <h2>Selectionne ton personnage</h2>
        <p>N'ai pas peur !!! l'aventure commence!!! Selectionne une image puis appuis sur le bouton Choix player. Une fois prêt... Combattez!!! </p>
    </header>
    <form method="get">
        <div class="container_fluid py-5">
            <div class="row pb-5">
                <div class="col-sm-3 text-center">
                    <h2><?php echo $_SESSION['player1']['name'];?></h2>
                    <?php if(!empty($_SESSION["player1"]["champion"])){
                        echo recupChampion1();
                    } ?>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <?php
                        foreach ($_SESSION['persos'] as $perso) {?>
                             <div class="col-2 <?php if ($_GET['id']==$perso['id']){echo "playerSelect";}?> "><a href="?id=<?=$perso["id"]?>"><img src="<?= $perso["image"]?>" alt="..." class="img-thumbnail"><p><?=$perso["name"]?></p></a></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <h2><?php echo $_SESSION['player2']['name']; ?></h2>
                    <?php if(!empty($_SESSION["player2"]["champion"])){
                        echo recupChampion2();
                    } ?>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark py-5" id="selectFooter">
            <div class="row justify-content-center ">
                <?php bouton() ?>
            </div>
        </div>
    </form>
<?php
function checkplayer()
{
    if (empty($_SESSION["player1"]["champion"])) {
        echo 'Choix player 1';
    } else {
        echo 'Choix player 2';
    }
}

function recupIdChampion()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        return $id;
    }
}

function choixPlayer()
{
    if (isset($_GET['submit'])) {
        if (empty($_SESSION["player1"]["champion"])) {
            $_SESSION["player1"]["champion"] = $_GET['submit'];
            return $_SESSION["player1"]["champion"];
        } else {
            $_SESSION["player2"]["champion"] = $_GET['submit'];
            return $_SESSION["player2"]["champion"];
        }
    }
}
include './inc_script.php';
