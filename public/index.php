<?php

session_start();
require '../App/core/init.php';
DEBUG ? ini_set('display_errors',1) : ini_set('display_errors', 0);



$app1= new App;
$app1->loadcntroller();







