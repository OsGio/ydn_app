<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PageController@getIndex');
Route::post('/', 'FunctionController@postIndex');

Route::get('/excepts_keywords', 'PageController@getExceptsKeywords');
Route::post('/excepts_keywords', 'FunctionController@postExceptsKeywords');

Route::get('/ads_group', 'PageController@getAdsGroup');
Route::post('/ads_group', 'FunctionController@postAdsGroup');

Route::get('/add_ads', 'PageController@getAddAds');
Route::post('/add_ads', 'FunctionController@postAddAds');
