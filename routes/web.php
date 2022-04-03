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
    return view('home');
});

Route::get('/home', function(){
    return view("home");
});

Route::get('/jobs', function(){
    return view("job");
});

Route::get('/services', function(){
    return view("service");
});

Route::get('/signUp', function(){
    return view("signUp");
});

Route::get('/login', function(){
    return view("Login");
});

Route::get('/dashboard', function(){
    return view("dashboard");
});