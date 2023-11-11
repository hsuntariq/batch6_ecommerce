<?php

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
Route::view('/add-product','pages.admin.add-product')->name('add');
Route::view('/single/{id}','pages.user.single-product')->middleware('auth');
Route::view('/add-category','pages.admin.add-category');
Route::view('/product-analytics','pages.admin.product-analytics');
Route::view('/register','pages.user.register');
Route::view('/login','pages.user.login')->name('login');
Route::post('/insert-product',[productController::class,'insertProduct']);
Route::post('/insert-category',[categoryController::class,'addCategory']);
Route::post('/register',[userController::class,'SignUp']);
Route::post('/logout',[userController::class,'SignOut']);
Route::post('/login',[userController::class,'SignIn']);
Route::get('/',[productController::class,'getProducts']);
Route::get('/single/{id}',[productController::class,'findProduct'])->middleware('auth');
Route::get('/add-product',[categoryController::class,'getCategory']);
Route::get('/product-analytics',[productController::class,'productGraph']);
