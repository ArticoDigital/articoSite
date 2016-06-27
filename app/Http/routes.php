<?php

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    require __DIR__ . '/Routes/admin.php';
});
