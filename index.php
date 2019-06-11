<?php
    // turns on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // requires autoload file
    require_once('vendor/autoload.php');

    // starts a session
    session_start();

    // instantiates f3
    $f3 = Base::instance();

    // turn on f3 error reporting
    $f3->set('DEBUG', 3);

    // defines a default route
    $f3->route('GET /', function() {

        $view = new Template();
        echo $view->render('home.html');
    });

    // defines a route that accepts parameter for animal type
    $f3->route('GET /@type', function($f3, $params) {

        $type = $params['type'];
        if ($type == 'chicken') {
            echo 'Cluck!';
        } else if ($type == 'dog') {
            echo 'Woof!';
        } else if ($type == 'cat') {
            echo 'Meow';
        } else if ($type == 'snake') {
            echo 'Hiss';
        } else if ($type == 'pig') {
            echo 'oink';
        } else {
            $f3->error(404);
        }

        $view = new Template();
        echo $view->render('home.html');
    });


//define route  order 1

$f3->route('GET /order', function ()
{
    $view=new Template();
    echo $view->render( 'views/form1.html');




});





//Run fat free
$f3 ->run();

