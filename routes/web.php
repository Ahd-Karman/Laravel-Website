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
})->name('home');

Route::get('/home', function(){
    return view("home");
})->name('home');

Route::get('/jobs', function(){
    return view("job");
})->name('jobs');

Route::get('/services', function(){
    return view("service");
})->name('service');

Route::get('/signUp', function(){
    return view("signUp");
})->name('signUp');

Route::get('/login', function(){
    return view("Login");
})->name('login');

Route::get('/dashboard', function(){
    return view("dashboard");
})->name('dashboard');

Route::get('/job_details', function(){
    return view("job_details");
})->name('job_details');