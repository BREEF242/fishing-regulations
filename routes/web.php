<?php

$closed = [
  'crawfish'    => \Carbon\Carbon::now('America/Nassau')->between(
      \Carbon\Carbon::createFromDate(null, 4, 1, 'America/Nassau'),
      \Carbon\Carbon::createFromDate(null, 7, 31, 'America/Nassau')
    ),
  'grouper'     => \Carbon\Carbon::now('America/Nassau')->month == 12 || \Carbon\Carbon::now('America/Nassau')->month < 3 ? TRUE : FALSE,
  'stonecrab'   => \Carbon\Carbon::now('America/Nassau')->between(
      \Carbon\Carbon::createFromDate(null, 6, 1, 'America/Nassau'),
      \Carbon\Carbon::createFromDate(null, 10, 15, 'America/Nassau')
    ),
];

$router->get('/', ['as'=>'home', function () use ($router, $closed) {
    return view('home', ['closed' => $closed]);
}]);

$router->group(['prefix' => '/regulations'], function () use ($router, $closed) {

  $router->get('citizens-residents', ['as' => 'residents', function () use ($router, $closed) {
      return view('regulations.residents', ['section'=>'residents', 'closed' => $closed]);
  }]);

  $router->get('sports', ['as' => 'sports', function () use ($router, $closed) {
      return view('regulations.sports', ['section'=>'sports', 'closed' => $closed]);
  }]);

  $router->get('recreational', ['as' => 'recreational', function () use ($router, $closed) {
      return view('regulations.recreational', ['section'=>'recreational', 'closed' => $closed]);
  }]);

  $router->get('commercial', ['as' => 'commercial', function () use ($router, $closed) {
      return view('regulations.commercial', ['section'=>'commercial', 'closed' => $closed]);
  }]);

});
