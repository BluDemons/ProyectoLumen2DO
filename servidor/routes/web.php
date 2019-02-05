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

//person    OK
$router->post('/person', ['uses' => 'PersonController@crearPerson']);
$router->put('/person', ['uses' => 'PersonController@actualizarPerson']);
$router->delete('/person', ['uses' => 'ReservaController@eliminarPerson']);
$router->get('/person', ['uses' => 'PersonController@traerPersons']);


//reserva   OK
$router->post('/reserva', ['uses' => 'ReservaController@crearReserva']);
$router->put('/reserva', ['uses' => 'ReservaController@actualizarReserva']);
$router->delete('/reserva', ['uses' => 'ReservaController@eliminarReserva']);
$router->get('/reserva', ['uses' => 'ReservaController@traerReservas']);


//detalle_reserva   OK
$router->post('/detalle_reserva', ['uses' => 'Detalle_reservaController@crearDetalle_reserva']);
$router->put('/detalle_reserva', ['uses' => 'Detalle_reservaController@actualizarDetalle_reserva']);
$router->delete('/detalle_reserva', ['uses' => 'Detalle_reservaController@eliminarDetalle_reserva']);
$router->get('/detalle_reserva', ['uses' => 'Detalle_reservaController@traerDetalle_reservas']);


//mesa  OK
$router->post('/mesa', ['uses' => 'MesaController@crearMesa']);
$router->put('/mesa', ['uses' => 'MesaController@actualizarMesa']);
$router->delete('/mesa', ['uses' => 'MesaController@eliminarMesa']);
$router->get('/mesa', ['uses' => 'MesaController@traerMesas']);


//horario
$router->post('/horario', ['uses' => 'HorarioController@crearHorario']);
$router->put('/horario', ['uses' => 'HorarioController@actualizarHorario']);
$router->delete('/horario', ['uses' => 'HorarioController@eliminarHorario']);
$router->get('/horario', ['uses' => 'HorarioController@traerHorarios']);