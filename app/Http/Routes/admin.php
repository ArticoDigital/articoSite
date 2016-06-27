<?php

Route::get('/', [

]);
Route::get('cotizador', [
    'use' => 'QuotationController@index',
    'as' => 'quotation'
]);

Route::get('clientes', [
    'use' => 'CustomerController@index',
    'as' => 'customer'
]);

Route::get('encargados', [
    'use' => 'PositionController@index',
    'as' => 'position'
]);
