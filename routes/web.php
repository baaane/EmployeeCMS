<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'Site'], function($router){
    $router->get('/', 'MainController@index');
    $router->get('/todo', 'MainController@todo')->name('todo');
    $router->post('/todo', 'MainController@todo')->name('todo');
});

