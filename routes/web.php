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

Route::get('/', function () {
    return view('memory.index');
});




Route::group(['prefix' => 'memory'],function(){
    Route::get('index','MemoryController@index')->name('memory.index');
    Route::get('create','MemoryController@create')->name('memory.create');
    Route::post('store','MemoryController@store')->name('memory.store');
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
