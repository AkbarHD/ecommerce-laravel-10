<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
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


Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/admin/user_managament', [Controller::class, 'userManagement'])->name('userManagement');
Route::get('/admin/report', [Controller::class, 'report'])->name('report');


Route::get('/admin/addmodal', [ProductController::class, 'addModal'])->name('addModal');
Route::post('/admin/adddata', [ProductController::class, 'store'])->name('adddata');

Route::get('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
Route::put('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');

Route::delete('/admin/deleteData/{id}', [ProductController::class, 'destroy'])->name('deleteData');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
