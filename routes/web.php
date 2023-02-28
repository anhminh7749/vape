<?php

use App\Http\Controllers\Admin\adProController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\site\mainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [mainController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);




    Route::get('/admin', [adProController::class, 'index']);
    Route::get('/admin/brand', [BrandController::class, 'index']);
    Route::get('/admin/brand/add', [BrandController::class, 'create']);
