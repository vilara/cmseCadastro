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
Route::get('/','Autentica\AuthController@showLoginForm');
Route::middleware(['auth'])->group(function () {
Route::get('/home', 'HomeController@index')->name('home');




// Users Controller

Route::resource('user', 'Model\UserController');
Route::resource('section', 'Model\SectionController');
Route::resource('om', 'Model\OmController');
});
// Autenticação personalizada

// Route::get('login','Autentica\AuthController@showLoginForm')->name('login');
// Route::post('login','Autentica\AuthController@login');
Route::post('registrar','Autentica\AuthController@register')->name('registrar');
// Route::post('register','Autentica\RegisterController@register');
// Route::post('logout','Autentica\AuthController@logout');
// Route::get('password/reset','Autentica\AuthController@showLinkRequestForm')->name('password.request');
// Route::post('password/email','Autentica\AuthController@sendResetLinkEmail')->name('password.email');

//Route::get('registro', '');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
