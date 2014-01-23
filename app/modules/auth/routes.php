<?php

Route::get('admin/login', array('as' => 'admin.login', 'before' => 'guest', 'uses' => 'App\Modules\Auth\Controllers\AuthController@getLogin'));
Route::post('admin/login', array('as' => 'admin.login.post', 'before' => 'guest', 'uses' => 'App\Modules\Auth\Controllers\AuthController@postLogin'));
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'App\Modules\Auth\Controllers\AuthController@getLogout'));
