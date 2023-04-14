<?php

use App\Http\Controllers\MainController;
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

Route::get('/',[MainController::class, 'Home'])->name('HomePage');


Route::post('/add-product', [MainController::class, 'AddProduct'])->name('add.product');
Route::post('/update-product', [MainController::class, 'UpdateProduct'])->name('update.product');
Route::post('/delete-product', [MainController::class, 'DeleteProduct'])->name('delete.product');
Route::get('/pagination/paginate-data', [MainController::class, 'pagination']);
Route::get('/search-product',[MainController::class, 'search'])->name('search.product');

Route::get('/About',[MainController::class, 'About']);
