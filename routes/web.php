<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/add-product', function () {
//     return view('add-product');
// });


Route::view('/','welcome');
Route::view('/add-product','pages.admin.add-product')->name('add')->middleware(['auth','admin']);
Route::view('/single/{id}','pages.user.single-product')->middleware('auth');
Route::view('/add-category','pages.admin.add-category');
Route::view('/product-analytics','pages.admin.product-analytics');
Route::view('/register','pages.user.register');
Route::view('/cart','pages.user.cart')->middleware('auth');
Route::view('/login','pages.user.login')->name('login');
Route::view('/add-admin','pages.admin.add-admin')->middleware(['auth','super']);
Route::view('/buy-now','pages.user.buy-now')->middleware('auth');


Route::post('/insert-product',[productController::class,'insertProduct']);
Route::post('/insert-category',[categoryController::class,'addCategory']);
Route::post('/register',[userController::class,'SignUp']);
Route::post('/logout',[userController::class,'SignOut']);
Route::post('/login',[userController::class,'SignIn']);
Route::post('/add-to-cart',[cartController::class,'addToCart']);
Route::post('delete-item-cart/{id}',[cartController::class,'deleteCartItem']);
Route::post('/insert-admin',[userController::class,'addNewAdmin'])->middleware(['auth','super']);


Route::get('/',[productController::class,'getProducts']);
Route::get('/single/{id}',[productController::class,'findProduct'])->middleware('auth');
Route::get('/add-product',[categoryController::class,'getCategory'])->middleware(['auth','admin']);
Route::get('/product-analytics',[productController::class,'productGraph']);
Route::get('/cart',[cartController::class,'getUserCart'])->middleware('auth');
