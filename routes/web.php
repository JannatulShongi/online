<?php

use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\frontend\ProductsController;
use App\Http\Controllers\frontend\UsersController;
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

Route::get('/admin', function () {
    return view('backend.master');

});
Route::get('/backend/product/create',[ProductController::class,'create'])->name('backend.product.create');
Route::post('/product/update',[ProductController::class,'store'])->name('product.update');
Route::get('/backend/product/list',[ProductController::class,'list'])->name('backend.product.list');
//category
Route::get('/backend/category/create',[CategoryController::class,'create'])->name('backend.category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/backend/category/list',[CategoryController::class,'list'])->name('backend.category.list');
//frontend
Route::get('/', function () {
    return view('frontend.layouts.home');

});
Route::get('frontend/product/view',[ProductsController::class,'show'])->name('frontend.product.view');
//login
Route::get('frontend/user/registration',[UsersController::class,'form'])->name('frontend.user.registration');
Route::post('user/store',[UsersController::class,'store'])->name('user.store');
Route::get('frontend/user/login',[UsersController::class,'login'])->name('frontend.user.login');
Route::post('login/store',[UsersController::class,'loginput'])->name('login.store');
Route::get('logout/',[UsersController::class,'logout'])->name('logout');
