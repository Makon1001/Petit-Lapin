<?php
session_start();
// Controle des forms et datas passées dans le GET


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // action

    // init des sessions
    if(isset($_POST['player1_name']) && !empty($_POST['player1_name']) && isset($_POST['player2_name']) && !empty($_POST['player2_name'])) {
        $_SESSION['player1']['name'] = $_POST['player1_name'];
        $_SESSION['player2']['name'] = $_POST['player2_name'];
        header('location: /src/views/personnage.php');
    } else {
        header('location: /public/index.php');
    }
}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    // action
}


