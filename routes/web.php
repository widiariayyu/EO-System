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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom', [
    'as' => 'login', 
    'uses'=>'LoginController@login', 
    'as' => 'login.custom'
]); 

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', function(){
        return view('home' );
    })->name('home');
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});

Route::get('user.BirthdayOrder', function () {
    return view('user.BirthdayOrder');
}); 
// Route::get('dashboard',function(){
//     return view('dashboard');
// });
Route::resource('admin','AdminController');
Route::resource('user','UserController');
Route::get('/show','AdminController@show');

Route::resource('/Promo','PromoController');


