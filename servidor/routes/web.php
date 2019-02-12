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

$router->get('/', function () use ($router) {
    return $router -> app -> version();
});

//person
$router->get('/person', ['uses' => 'PersonsController@traerPerson']);
$router->post('/person', ['uses' => 'PersonsController@createPerson']);
$router->put('/person', ['uses' => 'PersonsController@updatePerson']);
$router->delete('/person', ['uses' => 'PersonsController@deletePerson']);



//reserve
$router->get('/reserve', ['uses' => 'ReservesController@traerReserve']);
$router->post('/reserve', ['uses' => 'ReservesController@crearReserve']);
$router->put('/reserve', ['uses' => 'ReservesController@actualizarReserve']);
$router->delete('/reserve', ['uses' => 'ReservesController@eliminarReserve']);





//bus 
$router->get('/bus', ['uses' => 'BusesController@traerBus']);
$router->post('/bus', ['uses' => 'BusesController@crearBus']);
$router->put('/bus', ['uses' => 'BusesController@actualizarBus']);
$router->delete('/bus', ['uses' => 'BusesController@eliminarBus']);


// seat
$router->get('/seat', ['uses' => 'SeatsController@traerSeat']);
$router->post('/seat', ['uses' => 'SeatsController@crearSeat']);
$router->put('/seat', ['uses' => 'SeatsController@actualizarSeat']);
$router->delete('/seat', ['uses' => 'SeatsController@eliminarSeat']);


// travel
$router->get('/travel', ['uses' => 'TravelsController@traerTravel']);
$router->post('/travel', ['uses' => 'TravelsController@crearTravel']);
$router->put('/travel', ['uses' => 'TravelsController@actualizarTravel']);
$router->delete('/travel', ['uses' => 'TravelsController@eliminarTravel']);