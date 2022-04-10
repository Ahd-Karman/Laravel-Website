<?php

use App\Http\Controllers\admin\AuthController;
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

Route::get('/signUp', [AuthController::class , 'create_account'])->name('create_account');
Route::post('/signUp' , [AuthController::class,'signUp'])->name('signUp');

Route::get('/login', [AuthController::class ,'show_login'])->name('login');

Route::get('/do_login', [AuthController::class ,'login'])->name('do_login');
Route::post('/do_login', [AuthController::class ,'login'])->name('do_login');

Route::get('/dashboard', function(){
    return view("admin.dashboard");
})->name('dashboard');

Route::get('/addSkills', function(){
    return view("admin.addSkills");
})->name('addSkills');

Route::get('/job_details', function(){
    return view("user.job_details");
})->name('job_details');