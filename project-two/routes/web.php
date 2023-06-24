<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student', [StudentController::class, 'create'])->name('new-student');
Route::get('/manege-student', [StudentController::class, 'manege'])->name('manege-student');
Route::get('/edite-data/{id}', [StudentController::class, 'edite'])->name('edite-data');

Route::post('/upload', [BlogController::class, 'saveBlog'])->name('create-blog');
Route::get('/blog-view', [BlogController::class, 'createBlog'])->name('blog-view');
Route::get('/manage-blog', [BlogController::class, 'manegeBlog'])->name('manage');
Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit-blog');
Route::post('/create-blog', [BlogController::class, 'saveBlog'])->name('create-blog');
Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('update');
Route::post('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog');

Route::get('/add-product', [ProductController::class, 'index'])->name('add-product')->middleware('admin');
Route::post('/upload-product', [ProductController::class, 'uploadProduct'])->name('upload-product');
Route::get('/manege-product', [ProductController::class, 'manegeProduct'])->name('manege-product');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
