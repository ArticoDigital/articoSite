<?php

Route::get('/', function(){
    return 'inicio';
});

Route::get('clientes', [
    'uses' => 'CustomerController@index',
    'as' => 'customer'
]);

Route::get('encargados', [
    'uses' => 'PositionController@index',
    'as' => 'position'
]);
