<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/superadmin' , 'SuperAdminController@index')->name('superadmin');
Route::get('/admin' , 'AdminController@index')->name('admin');
Route::get('/player' , 'PlayerController@index')->name('player');
Route::get('/team' , 'TeamController@index')->name('team');
Route::get('/home', 'HomeController@index')->name('home');
