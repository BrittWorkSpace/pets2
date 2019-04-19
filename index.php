<?php

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET|POST /', function (){
    echo "<h1>My Pets</h1>";
    echo "<a href='order'>Order a Pet</a>";

});

$f3->route('GET /@animal', function($f3, $params)
{
    if($params['animal']=='dog')
    {
        echo "woof";
    }
    else if( $params['animal']=='cat')
    {
        echo "meow";
    }
    else
    {
        $f3->error(404);
    }
});

$f3->route("GET|POST /order", function($f3){
    $view = new Template();
    echo $view->render("views/views.html");
});

$f3->route("GET|POST /order2", function($f3){
    $view = new Template();
    echo $view->render("views/views2.html");
});

$f3->route("GET|POST /results", function($f3){
    $view = new Template();
    echo $view->render("views/results.html");
});
