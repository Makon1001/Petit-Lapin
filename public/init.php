<?php
require '../vendor/autoload.php';
include 'inc_head.php';
include 'connexionApi.php';


if (!isset($_SESSION['player1']['posX']) && !isset($_SESSION['player1']['posY'])) {
    $_SESSION['player1']['posX'] = rand(0, 5);
    $_SESSION['player1']['posY'] = rand(0, 5);
}
if (!isset($_SESSION['player2']['posX']) && !isset($_SESSION['player2']['posY'])) {
    $_SESSION['player2']['posX'] = rand(0, 5);
    $_SESSION['player2']['posY'] = rand(0, 5);
}


// récupérer les images des oeufs return en array
$api = new \perso\ApiController();
$arrayEggs = $api->selectFiveRandomEggs();
$eggsImg=array();
for($i=0;$i<5;$i++){
    $eggs[$i]=get_object_vars($arrayEggs[$i]);
    $eggsImg[$i] = $eggs[$i]['image'];

}
$arrayPos=[];
// init position eggs et set imgEggs
for ($i= 1; $i <=5; $i++) {
    if (isset($_SESSION['eggs']['egg'.$i])) {
        $position = [rand(0, 5), rand(0, 5)];
        $arrayPos[] = $position;
        if(($position[0]!=$_SESSION['player1']['posX'] && $position[1]!=$_SESSION['player1']['posY']) || ($position[0]!=$_SESSION['player2']['posX'] && $position[1]!=$_SESSION['player2']['posY']) && !in_array($position, $arrayPos))  {

                $_SESSION['eggs']['egg' . $i]['position'] = $position;

        } else {
            $i--;
        }
        $_SESSION['eggs']['egg' . $i]['imgSrc'] = $eggsImg[$i - 1];
    }
}

$_SESSION['eggsCounter'] = 5;
$_SESSION['player3']['imgSrc']="assets/images/yavuz.jpeg";
$_SESSION['player3']['name']="Yavuz";
$_SESSION['player3']['pv']=100;


header('location: /public/personnage.php');