<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#AlexaRoute::launch('test','WolframController@launch');
#AlexaRoute::sessionEnded('/test', 'WolframController@endSession');
#AlexaRoute::intent('/test', 'WhatIs', 'WolframController@intent');

Route::get('test','WolframController@intent');
Route::post('test','WolframController@intent');