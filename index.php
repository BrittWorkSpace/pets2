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
    else if( $params['anmila']=='cat')
    {
        echo "meow";
    }
    else
    {
        echo "ManBearPig";
    }
}
);
