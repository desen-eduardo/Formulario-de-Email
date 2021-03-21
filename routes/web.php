<?php

/**
 * github.com/robsonvleite/router
 */
use \PlugRoute\PlugRoute;
use \PlugRoute\RouteContainer;
use \PlugRoute\Http\RequestCreator;

$route = new PlugRoute(new RouteContainer(), RequestCreator::create());

$route->notFound(function() {
   header('location:'.CONFIG['URL'].'/404');
});

//tratando get
$route->namespace('\\App\\Controllers\\', function($route) {
    $route->get('/', 'HomeController@index'); 
    $route->get('/login', 'LoginController@index'); 
    $route->get('/404', 'NotFoundController@index');
    $route->get('/logout','LoginController@logout');
});

//tratando post
$route->namespace('\\App\\Controllers\\', function($route) {
    $route->post('/', 'HomeController@create'); 
    $route->post('/login','LoginController@access');
});

$route->on();