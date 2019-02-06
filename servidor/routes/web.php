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
$router->get('/person', ['uses' => 'PersonController@traerPerson']);
$router->post('/person', ['uses' => 'PersonController@crearPerson']);
$router->put('/person', ['uses' => 'PersonController@actualizarPerson']);
$router->delete('/person', ['uses' => 'ReservaController@eliminarPerson']);



//reserve
$router->get('/reserve', ['uses' => 'ReserveController@traerReserve']);
$router->post('/reserve', ['uses' => 'ReserveController@crearReserve']);
$router->put('/reserve', ['uses' => 'ReserveController@actualizarReserve']);
$router->delete('/reserve', ['uses' => 'ReserveController@eliminarReserve']);



//reservedetail
$router->get('/reservedetail', ['uses' => 'ReserveDetailController@traerReserveDetail']);
$router->post('/reservedetail', ['uses' => 'ReserveDetailController@crearReserveDetail']);
$router->put('/reservedetail', ['uses' => 'ReserveDetailController@actualizarReserveDetail']);
$router->delete('/reservedetail', ['uses' => 'ReserveDetailController@eliminarReserveDetail']);



//bus 
$router->get('/bus', ['uses' => 'BusController@traerBus']);
$router->post('/bus', ['uses' => 'BusController@crearBus']);
$router->put('/bus', ['uses' => 'BusController@actualizarBus']);
$router->delete('/bus', ['uses' => 'BusController@eliminarBus']);


// seat
$router->get('/seat', ['uses' => 'SeatController@traerSeat']);
$router->post('/seat', ['uses' => 'SeatController@crearSeat']);
$router->put('/seat', ['uses' => 'SeatController@actualizarSeat']);
$router->delete('/seat', ['uses' => 'SeatController@eliminarSeat']);


// travel
$router->get('/travel', ['uses' => 'TravelController@traerTravel']);
$router->post('/travel', ['uses' => 'TravelController@crearTravel']);
$router->put('/travel', ['uses' => 'TravelController@actualizarTravel']);
$router->delete('/travel', ['uses' => 'TravelController@eliminarTravel']);