<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('beranda');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');

Route::get('/admin', [Controller::class, 'admin'])->name('admin');




Route::get('/admin/report', [Controller::class, 'report'])->name('report');

Route::get('/admin/user_managament', [UserController::class, 'index'])->name('userManagement');
Route::get('/admin/addmodaluser', [UserController::class, 'addModal'])->name('addModalUser');
Route::post('/admin/adduser', [UserController::class, 'store'])->name('userManagement.add');
Route::get('/admin/edituser/{id}', [UserController::class, 'show'])->name('userManagement.show');
Route::put('/admin/updateuser/{id}', [UserController::class, 'update'])->name('userManagement.update');
Route::delete('/admin/deleteuser/{id}', [UserController::class, 'destroy'])->name('userManagement.destroy');

Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/admin/addmodal', [ProductController::class, 'addModal'])->name('addModal');
Route::post('/admin/adddata', [ProductController::class, 'store'])->name('adddata');
Route::get('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
Route::put('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');
Route::delete('/admin/deleteData/{id}', [ProductController::class, 'destroy'])->name('deleteData');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
