<?php


ini_set("display_errors", 1);
error_reporting(E_ALL);


require_once('vendor/autoload.php');


$f3 = Base::instance();



$f3->route('GET /', function () {
//    echo "<h1>Pet Home</p>";

    $views = new Template();
    echo $views->render('views/home.html');
});


$f3->run();