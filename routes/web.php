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
    return view('welcome');
});

Auth::routes();
Route::get('/register',function(){
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/Contacts',[
        'uses'=>'ContactController@index',
        'as'=>'contact.index'
    ]);
    Route::post('/Contacts/Store',[
        'uses'=>'ContactController@store',
        'as'=>'contact.store'
    ]);
    Route::get('/Practice/Areas',[
        'uses'=>'PracticeController@index',
        'as'=>'practice.index'
    ]);
});