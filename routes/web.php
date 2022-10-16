<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front;

use App\Http\Controllers\dashboard;
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
Route::get('/',[front\HomeController::class,'index']);
Route::get('/home',[front\HomeController::class,'index']);

Route::get('/search-hospital',[front\HomeController::class,'search_hospital']);
Route::get('/search-doctor',[front\HomeController::class,'search_doctor']);
Route::get('/search-service',[front\HomeController::class,'search_service']);
Route::get('/ho-so-csyt', function () {
    return view('front.Hosobv');
});


Route::get('/admin-login', function () {
    return view('dashboard.admin_login');
});
Route::post('/admin-dashboard',[dashboard\AdminController::class,'dashboard']);
Route::get('/admin',[dashboard\AdminController::class,'show_dashboard']);
Route::get('/logout',[dashboard\AdminController::class,'log_out']);

Route::get('/admin-add-category-product',[dashboard\ProductController::class,'add_category_product']);
Route::get('/admin-all-category-hospital',[dashboard\ProductController::class,'all_category_hospital']);
Route::post('/save-category-hospital',[dashboard\ProductController::class,'save_category_hospital']);
Route::get('/admin-edit-category-hospital/{hospital_id}',[dashboard\ProductController::class,'edit_category_hospital']);
Route::post('/admin-update-category-hospital/{hospital_id}',[dashboard\ProductController::class,'update_category_hospital']);
Route::get('/admin-delete-category-hospital/{hospital_id}',[dashboard\ProductController::class,'delete_category_hospital']);

Route::get('/admin-all-category-doctor',[dashboard\ProductController::class,'all_category_doctor']);
Route::get('/admin-edit-category-doctor/{doctor_id}',[dashboard\ProductController::class,'edit_category_doctor']);
Route::post('/save-category-doctor',[dashboard\ProductController::class,'save_category_doctor']);
Route::post('/admin-update-category-doctor/{doctor_id}',[dashboard\ProductController::class,'update_category_doctor']);
Route::get('/admin-delete-category-doctor/{doctor_id}',[dashboard\ProductController::class,'delete_category_doctor']);