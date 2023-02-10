<?php

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//session
session_start();

//require autoload
require_once("vendor/autoload.php");

//instantiate base class of fat-free
$f3 = Base::instance();

//default route
$f3->route('GET /', function ($f3){

    $view = new Template();
    echo $view->render('views/home.html');
});

//run instance of fat-free
$f3->run();