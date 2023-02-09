<?php


use App\Http\Controllers\adminController;
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
Route::get('/shop/catagory', [adminController::class, 'catagory'])->name('admin.catagory');
Route::get('/shop/aboute', [shopController::class, 'aboute'])->name('shop.aboute');
Route::get('/shop/products', [shopController::class, 'products'])->name('shop.products');
Route::post('/shop/catagory/add_catagory', [adminController::class, 'add_catagory'])->name("admin.add_catagory");
Route::get('/logout', [logoutController::class, 'getout'])->name('user.logout');
Route::delete('/shop/catagory/{id}', [adminController::class, 'delete_catagry'])->name('delete_catagry');
Route::get('/shop/catagory/products', [adminController::class, 'view_products'])->name('view_products');
Route::post('/shop/catagory/add_product', [adminController::class, 'add_product'])->name('add_product');
Route::get('/shop/catagory/show_products', [adminController::class, 'show_products'])->name('show_products');

// Route::get('/products/create', [productsController::class, 'create'])->name('products.create')->middleware('auth');
// Route::post('/products', [productsController::class, 'store'])->name('products.store');
// Route::get('/products/{id}', [productsController::class, 'show'])->where(['id' => '[0-9]+'])->name('products.show');
// Route::get('products/restore/', [productsController::class, 'restore'])->name('products.restore');
// Route::get('/products/{id}/edit', [productsController::class, 'edit'])->name('products.edit');
// Route::put('/products/{id}', [productsController::class, 'update'])->name('products.update')->middleware('auth');
// Route::delete('/products/{id}', [productsController::class, 'destroy'])->name('products.destroy');

// Route::fallback(function () {
//     return '<h1>Something went wrong pleas try again</h1>';
// });




require __DIR__ . '/auth.php';
