<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AddBookcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\commentsController;
use App\Http\Controllers\CustomerRequestsController;
use App\Http\Controllers\SalesArchiveController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Users_requestController;
use App\Http\Controllers\shoppingCartsController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Auth;

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


//Dashboard
Route::get('/Dashboard', [AddBookcontroller::class, 'Dashboard'])->name('Dashboard');


//product
Route::get('/product/create', [AddBookcontroller::class, 'create'])->name('product.create');
Route::post('/product/add', [AddBookcontroller::class, 'insert'])->name('product.add');
Route::get('/product/edit/{id}', [AddBookcontroller::class, 'edit'])->name('product.edit');
Route::put('/product/update/{id}', [AddBookcontroller::class, 'update'])->name('product.update');
Route::delete('/product/delete/{id}', [AddBookcontroller::class, 'delete'])->name('products.remove');


//index && cart
Route::get('/index', [MainController::class, 'index'])->name('index');
Route::get('/book', [MainController::class, 'book'])->name('book');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('add_to_cart/{id}', [MainController::class, 'addToCart'])->name('add_to_cart');
Route::patch('/update_cart', [MainController::class, 'update'])->name('update_cart');
Route::delete('remove_from_cart', [MainController::class, 'remove'])->name('remove_from_cart');


//comments.add
Route::post('/comments/add', [commentsController::class, 'insert'])->name('comments.add');


// add from cart to data
Route::post('/cart/add', [shoppingCartsController::class, 'insert'])->name('cart.add');


//categry
Route::get('/index/categry', [CategoryController::class, 'categryindex'])->name('categryindex');
Route::get('/categry/create', [CategoryController::class, 'create'])->name('categry.create');
Route::post('/categry/add', [CategoryController::class, 'insert'])->name('categry.add');
Route::get('/categry/edit/{id}', [CategoryController::class, 'edit'])->name('categry.edit');
Route::put('/categry/update/{id}', [CategoryController::class, 'update'])->name('categry.update');

Route::delete('/remove/categry/{id}', [CategoryController::class, 'delete'])->name('remove.categry');



//shopping-carts
Route::get('/shopping/carts', [shoppingCartsController::class, 'index'])->name('shopping.carts');

//Users_requests
Route::get('/Customer/Requests', [CustomerRequestsController::class, 'index'])->name('Customer.Requests');
Route::get('/product/delete/{id}', [CustomerRequestsController::class, 'delete'])->name('delete.product');
Route::get('/shipping/delete/{id}', [CustomerRequestsController::class, 'shipping'])->name('shipping.product');


//SalesArchive
Route::get('/sales-archive', [SalesArchiveController::class, 'index'])->name('sales.archive');
Route::get('/restore-product', [SalesArchiveController::class, 'restoreProduct'])->name('restore.product');
Route::put('/sales-archive/restore-all', [SalesArchiveController::class, 'restoreAllProducts'])->name('restore.all.products');


//Search
Route::get('/search', [SearchController::class, 'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
