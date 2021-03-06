<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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
return view('admin.layout.master');
});

/*

Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){


    
Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');

Route::get('/home',[DashboardController::class,'dashboard'])->name('home');

Route::get('/show_all_users',[AuthController::class,'listAll'])->name("show_users");
Route::get('/new_category',[CategoriesController::class,'create'])->name('new_category');

Route::get('/login',[AuthController::class,'showLogin'])->name('login');


});




Route::group(['middleware'=>'auth'],function(){
	Route::group(['middleware'=>'role:admin|super_admin'],function(){

		Route::get('/dashboard',[DashboardController::class,'adminDash'])->name('dashboard');

		Route::get('/dashboard',[DashboardController::class,'adminDash'])->name('dashboard');
		Route::get('/dashboard',[DashboardController::class,'adminDash'])->name('dashboard');
		Route::get('/dashboard',[DashboardController::class,'adminDash'])->name('dashboard');



	});
	
	Route::get('/logout',[AuthController::class,'logout'])->name('logout');
	
});



Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

Route::get('/generate_roles',[SettingsController::class,'generateRoles'])->name('generate_roles');

*/

Route::group(['prefix'=>'admin_panel'],function(){

	Route::group(['middleware'=>['auth','role:admin']],function(){

//		Route::get('/list_categories',[CategoriesController::class,'index'])->name('list_categories');
	//Route::get('/add_category',[CategoriesController::class,'create'])->name('add_category');
	/*Route::get('/edit_category/{cat_id}',[CategoriesController::class,'edit'])->name('edit_category');
	Route::get('/toggle_category/{cat_id}',[CategoriesController::class,'toggle'])->name('toggle_category');
	Route::post('/save_category',[CategoriesController::class,'store'])->name('save_category');
	Route::post('/update_category/{cat_id}',[CategoriesController::class,'update'])->name('update_category');
*/
	});
	Route::get('/logout',[AuthController::class,'logout'])->name('logout');

	Route::get('/login',[AuthController::class,'showLogin'])->name('login');
	Route::post('/do_login',[AuthController::class,'login'])->name('do_login');
	Route::get('/list_categories',[JobController::class,'index'])->name('list_categories');

	Route::get('/add_category',[JobController::class,'create'])->name('add_category');
	Route::get('/edit_category/{cat_id}',[JobController::class,'edit'])->name('edit_category');
	Route::get('/toggle_category/{cat_id}',[JobController::class,'toggle'])->name('toggle_category');
	Route::post('/save_category',[JobController::class,'store'])->name('save_category');
	Route::post('/update_category/{cat_id}',[JobController::class,'update'])->name('update_category');
});
