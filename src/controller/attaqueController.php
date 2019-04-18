<?php
session_start();
$_SESSION['player3']['pv']= 50;

header('location: /public/Attaque.php');