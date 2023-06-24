<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullNameController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [FullNameController::class, 'getFullName'])->name('home');
Route::post('/create-name', [FullNameController::class, 'createName'])->name('name');
Route::get('/info', [FullNameController::class, 'infoUser'])->name('infoUser');
Route::get('/kazi', [FullNameController::class, 'kaziCom'])->name('kaziCom');
Route::get('/contact', [FullNameController::class, 'contactInfo'])->name('contactInfo');
Route::get('/products', [ProductsController::class, 'getAllProductInfo'])->name('productInfo');
