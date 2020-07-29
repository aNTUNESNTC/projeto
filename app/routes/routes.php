<?php


include_once 'Request.php';
include_once 'Router.php';


$routes = new Router(new Request);
var_dump($routes);


