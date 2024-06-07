<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Models\Categories;
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
    return view('Admin.index');
});


Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::resources([
        'categories' => CategoryController::class,
        'subcategories' => SubCategoryController::class,
        'products' =>ProductController::class
    ]);
});
Route::post('add',[CategoryController::class,'add'])->name('add');
