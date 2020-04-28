<?php

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
    return view('users.logIn');
});
Route::get('users/signIn', function () {
    return view('users.signIn');
});
Route::get('users/loggedIn', function () {
    return view('users.loggedIn');
});
Route::get('users/forgotPassword', function () {
    return view('users.forgotPassword');
});
Route::get('users/newPassword', function () {
    return view('users.newPasword');
});
Route::get('users/OTPpage', function () {
    return view('users.OTPpage');
});
Route::post('login', 'UsersController@login');
Route::post('signin', 'UsersController@signUp');
Route::post('forgotpassword', 'UsersController@forgotPassword');
Route::post('checkotp', 'UsersController@checkOTP');
Route::post('newpassword', 'UsersController@newPassword');