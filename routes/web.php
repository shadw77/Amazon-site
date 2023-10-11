<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;


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

// Route::get('land/products/{id}',[ProductController::class,'getProduct'])->name('land.getProduct');
// Route::get('land',[ProductController::class,'landingblade']);
Route::get('contact',[ProductController::class,'go_contact']);
Route::get('about',[AboutController::class,'go_about']);
##################### get data from db
// Route::get('db/products',[ProductController::class,'index_db'])->name('products.db');
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('product/create',[ProductController::class,'create'])->name('products.create');
Route::get('dbproducts/{id}',[ProductController::class,'show'])->name('products.show');
Route::get('products/{id}/delete', [ProductController::class, 'delete'])->name('products.delete');
Route::post('products',[ProductController::class,'store'])->name('product.store');
Route::get('product/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('uproducts/{id}/', [ProductController::class,'update'])->name('product.update');

##generate Category routes in one line using resource Controller
Route::resource('categories', CategoryController::class);
##################################################
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


################################
