<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DeshboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
    // ...

    Route::controller(DeshboardController::class)->group(function (){
        Route::get('/admin/dashboard', 'index');

    });

    Route::controller(CategoryController::class)->group(function(){

        Route::get('/admin/add-category','addCategory')->name('admin.addCategory');
        Route::get('/admin/all-category','allCategory')->name('admin.allCategory');

    });

    Route::controller(SubCategoryController::class)->group(function(){

        Route::get('/admin/sub-add-category','subAddCategory')->name('admin.sub-add-category');
        Route::get('/admin/sub-all-category','subAllCategory')->name('admin.sub-all-category');

    });
    Route::controller(ProductController::class)->group(function(){

        Route::get('/admin/add-product','addProduct')->name('admin.add-product');
        Route::get('/admin/all-product','allCategory')->name('admin.all-product');

    });





});



require __DIR__.'/auth.php';
