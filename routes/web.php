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
    return view('user.home');
})->name('home');

Route::get('/home', function(){
    return view("user.home");
})->name('home');

Route::get('/jobs', function(){
    return view("user.job");
})->name('jobs');

Route::get('/services', function(){
    return view("user.service");
})->name('service');

Route::get('/signUp', function(){
    return view("user.signUp");
})->name('signUp');

Route::get('/login', function(){
    return view("user.Login");
})->name('login');

Route::get('/dashboard', function(){
    return view("dashboard");
})->name('dashboard');

Route::get('/job_details', function(){
    return view("user.job_details");
})->name('job_details');