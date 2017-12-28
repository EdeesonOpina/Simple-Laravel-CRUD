<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','HomeController@showDashboard');

Route::get('manage-humans','HomeController@showManageHumans');
Route::get('add-human','HomeController@showManageAddHuman');
Route::post('add-human','HomeController@doAddHuman');
Route::get('view-human/{id}','HomeController@showViewHuman');
Route::get('edit-human/{id}','HomeController@showEditHuman');
Route::post('edit-human','HomeController@doEditHuman');
Route::get('delete-human/{id}','HomeController@doDeleteHuman');