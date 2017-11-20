<?php


$router->get('/', ['as'=>'home', function () use ($router) {
    return view('home');
}]);

$router->get('regulations/citizens-residents', ['as' => 'residents', function () use ($router) {
    return view('regulations.residents', ['section'=>'residents']);
}]);

$router->get('regulations/sports', ['as' => 'sports', function () use ($router) {
    return view('regulations.sports', ['section'=>'sports']);
}]);

$router->get('regulations/recreational', ['as' => 'recreational', function () use ($router) {
    return view('regulations.recreational', ['section'=>'recreational']);
}]);

$router->get('regulations/commercial', ['as' => 'commercial', function () use ($router) {
    return view('regulations.commercial', ['section'=>'commercial']);
}]);
