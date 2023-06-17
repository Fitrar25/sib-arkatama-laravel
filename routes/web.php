<?php

use App\http\controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\http\controllers\DashboardController;
use App\http\controllers\CategoryController;
use App\http\controllers\ProductController;
use App\http\controllers\RoleController;


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

Route::get('/', function () {
    return view('landing/landing');
})->name('home');

route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

route::get('/category', [CategoryController::class, 'index'])->name('category.index');
route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

route::get('/product', [ProductController::class, 'index'])->name('product.index');
route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/role', [RoleController::class, 'index'])->name('role.index');

