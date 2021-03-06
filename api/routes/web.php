<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$app->get('/', function () use ($app) {
        return $app->version();
});

$app->get('/ping', function () use ($app) {
    return response()
        ->json(['alive' => true]);
});

$app->get('/primeFactors',  [
    'as' => 'profile', 'uses' => 'Controller@calculate'
]);


$app->get('/fire/geek',  [
    'as' => 'profile', 'uses' => 'Controller@geek'
]);

//$app->get('/primeFactors', function () use ($app) {
//    return response()
//        ->json(['alive' => true]);
//});