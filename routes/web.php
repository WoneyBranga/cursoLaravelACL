<?php

Route::group(['prefix' => 'painel'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/post/{id}/update', 'HomeController@update')->name('update');

    Route::get('/', 'Painel\PainelController@index');

});

Auth::routes();

Route::get('/', 'SiteController@index' );
