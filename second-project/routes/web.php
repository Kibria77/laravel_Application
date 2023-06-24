<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\StudentData;

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

Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('/bitm', [ViewController::class, 'bitm'])->name('bitm');
Route::get('/student-info', [StudentData::class, 'info'])->name('info');
Route::get('/about', [StudentData::class, 'about'])->name('about');
Route::get('/contact', [StudentData::class, 'contact'])->name('contact');
Route::get('/details/{id}', [StudentData::class, 'detail'])->name('detail');
Route::post('/full-name', [StudentData::class, 'fullName'])->name('full-name');
