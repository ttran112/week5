<?php
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');
require_once ('model/data-layer.php');

//create an instance of th Base class
$f3 = Base::instance();
$f3 -> set('DEBUG',3);

// define a default route
//$f3 -> route('GET /', function ()
//{
//    //echo '<h1>Hello, world</h1>';
//    $view = new Template();
//    echo $view -> render('view/home.html');
//}
//);

$f3 -> route('GET /', function ($f3){
    $f3 -> set('username', 'thanh');
    $f3 -> set('password', sha1('tran'));
    $f3 -> set('title', 'Working with Template');
    $f3 -> set ('ftemp', 67);
    $f3 -> set('radius', 10);
    $f3 -> set('color', 'purple');
    $f3 -> set('fruits', getFruit());
    $f3 -> set('salaries', getSalary());
    $f3 -> set('deserts', getDesert());
    $f3 -> set('num', 10);

    //load template
    $template = new Template();
    echo $template -> render('view/home.html');

});
//run fat free
$f3 -> run();



