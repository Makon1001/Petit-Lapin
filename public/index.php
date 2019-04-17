<?php
require '../vendor/autoload.php';
include '../src/views/inc_head.php';
include '../src/views/connexionApi.php';

// content

$perso1 = new \perso\Personnage('John', 5, 5, 0,0);
$perso2 = new \perso\Personnage('Jane',3,9,1,2);


echo $perso2->status();
$perso1->attack($perso2);
echo $perso2->status();

include '../src/views/inc_script.php';
