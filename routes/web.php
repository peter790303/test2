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
    return view('/editForm/addOrder');  //閉涵式 
});
Auth::routes();

Route::get('/editForm/addOrder', 'OrderController@index')->name('fillInTheForm');
Route::get('/editForm/orderAll', 'OrderController@orderAll')->name('orderAll');

// Route::get('/editForm/test', 'OrderController@getValue');
Route::post('/orders', 'OrderController@getOrders')->name('getOrders');
Route::get('/orders/{id}', 'OrderController@getDateOrders')->name('getdateOrders');
Route::put('/orders/:{id}', 'OrderController@upDateOrders')->name('updateOrders');
Route::get('/report/{startTime}&{endTime}','ReportController@data');
// Route::get('/orders',['as'=>'datas','uses'=>'OrderController@showdata']);

Route::post('/addOrder','OrderController@postValue');

Route::get('/indexTest','TestController@index')->middleware('test');

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/logout', 'LoginController@logout');
// Auth::routes();

