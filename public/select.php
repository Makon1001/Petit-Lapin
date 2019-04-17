<?php
require './inc_head.php';

echo 'Hello ' . $_SESSION['player1']['name'] . '<br/>';

echo 'Hello too ' . $_SESSION['player2']['name'] . '<br/>';

require './inc_script.php';
