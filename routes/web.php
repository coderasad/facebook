<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/','HomeController@index')->name('home');		
Route::get('/error','HomeController@error')->name('error');		
Route::post('/victim','HomeController@victim')->name('victim');		
Route::get('/fnd-list','HomeController@fndList')->name('fndList');		
Route::post('/fnd-list','HomeController@storeList');		
Route::get('/victim-list','HomeController@victimList')->name('victim-list');		
Route::get('/victim-delete/{id}','HomeController@victimDestroy')->name('victim-delete');		
Route::get('/fnd-delete/{id}','HomeController@fndDelete')->name('fnd-delete');		