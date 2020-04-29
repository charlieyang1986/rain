<?php
// Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// require the autoload file

require_once("vendor/autoload.php");

// Instantiate the F3 base class
$f3 = Base::instance();

//default route
$f3->route('GET /',function(){
    echo '<h1>It is raining today</h1>';

//    $view = new Template();
//    echo $view->render('view/home.html');
});



//Run F3
$f3->run();

