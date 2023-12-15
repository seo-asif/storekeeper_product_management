<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
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

Route::get('/', [DashboardController::class, 'showHome']);
Route::get('/add_product', [ProductController::class, 'addProduct'])->name('add.product');
Route::get('/update_price', [ProductController::class, 'updatePrice']);
Route::get('/all_sale', [SaleController::class, 'showSale'])->name('all.sale');
Route::get('/sale', [SaleController::class, 'saleProduct'])->name('add.sale');
