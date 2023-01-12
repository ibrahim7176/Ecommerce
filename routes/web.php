<?php

use App\Http\Controllers\AdminConroller;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\shopController;
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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/shop', [shopController::class, 'index'])->name('shop.index');
Route::get('/shop/aboute', [shopController::class, 'aboute'])->name('shop.aboute');
Route::get('/logout', [logoutController::class, 'getout'])->name('user.logout');
Route::get('/shop/products', [shopController::class, 'products'])->name('shop.products');
Route::get('/shop/adminDashboard', [shopController::class, 'admin'])->name('shop.admin');

Route::get('/admin/catagory', [AdminConroller::class, 'catagory'])->name('admin.catagory');

Route::get('/products', [productsController::class, 'index'])->name('products.index');
Route::get('/products/create', [productsController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('/products', [productsController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [productsController::class, 'show'])->where(['id' => '[0-9]+'])->name('products.show');
Route::get('products/restore/', [productsController::class, 'restore'])->name('products.restore');
Route::get('/products/{id}/edit', [productsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [productsController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/products/{id}', [productsController::class, 'destroy'])->name('products.destroy');

// Route::fallback(function () {
//     return '<h1>Something went wrong pleas try again</h1>';
// });




require __DIR__ . '/auth.php';
