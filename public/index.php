<?php
require '../vendor/autoload.php';
include '../src/views/inc_head.php';
include '../src/views/connexionApi.php';

// content
var_dump($test = selectAllPerso());

include '../src/views/inc_script.php';
