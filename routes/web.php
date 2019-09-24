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

// Route::get('/', function () {
//     return view('world');

// });



Route::get('/','StaticController@hello');


Route::get('/about',function(){
    return view('hello');
});

Route::get('/about2',function(){
    return view('statics.about');
});

// Route::get('/name', function(){
//     return view('statics.name')
//         ->with('name','เน้มมมมม');
// });

// Route::get('/name/{surname}', function(){
//     return view('statics.name')
//         ->with(['name' => 'เน้มมมมม','surname' => 'เช้อเนม']);
// });

Route::get('/name/{surname}',function($surname){
    return $surname;
    return view('statics.name');
});

Route::get('/customer', 'CustomerContorller@index');
Route::get('/customer/{id}', 'CustomerContorller@show');

