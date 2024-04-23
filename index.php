<?php
//Error reporting, autoload, session start
ini_set('error_reporting',1);
error_reporting('E_ALL');
require_once('vendor/autoload.php');
session_start();

//Instantiate base class
$f3 = Base::Instance();

//Create default route to info.html
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/info.html');
});