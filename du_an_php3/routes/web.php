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
    return view('welcome');
});
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/admin/home', [\App\Http\Controllers\AdminController::class, 'home']);
Route::get('/admin/product', [\App\Http\Controllers\PhoneManagerController::class, 'list'])->name('route_product_list');
Route::match(['GET','POST'],'/admin/product/add', [App\Http\Controllers\PhoneManagerController::class, 'add'])->name('route_product_add');
Route::match(['GET','POST'],'/admin/product/edit/{id}', [App\Http\Controllers\PhoneManagerController::class, 'edit'])->name('route_product_edit');
