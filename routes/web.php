<?php

Route::get('/', 'IndexController@index');
Route::post('/create', 'IndexController@save');
Route::post('/edit/{id}', 'IndexController@edit');
Route::get('/get/{id}', 'IndexController@get_data');
Route::get('/delete/{id}' , 'IndexController@delete');
