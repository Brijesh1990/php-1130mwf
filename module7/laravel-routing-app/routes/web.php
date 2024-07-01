<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\customer\CustomerHomeController;
use App\Http\Controllers\customer\AboutController;
use App\Http\Controllers\customer\ContactController;
use App\Http\Controllers\customer\ProductsController;
use App\Http\Controllers\customer\ProductsDescriptionsController;
use App\Http\Controllers\customer\CheckoutController;
use App\Http\Controllers\customer\PaymentsController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\customer\CustomerAccountController;
use App\Http\Controllers\admin\AddCategoryController;



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

// calculator routing here
// Route::get('/',function()
// {
//   // return view('calculator/calculator');
//   return view('calculator.calculator');
// });

// crud operations view routing here
// Route::get('/',[HomeController::class,'index']);
// Route::get('/contact-us',[ContactController::class,'index']);
// Route::get('/create-account',[CreateAccountController::class,'index']);

// ecommerce templates routing here

Route::get('/',[CustomerHomeController::class,'index']);
Route::get('/about-us',[AboutController::class,'index']);
Route::get('/contact-us',[ContactController::class,'index']);
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products-descriptions',[ProductsDescriptionsController::class,'index']);
Route::get('/checkout',[CheckoutController::class,'index']);

// admin panel templates integrations routing here
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/dashboard',[AdminDashboardController::class,'index']);
Route::get('/admin-login/manage-customers',[CustomerAccountController::class,'shwcustomeradmin']);
Route::get('/admin-login/add-category',[AddCategoryController::class,'index']);
Route::post('/admin-login/add-category',[AddCategoryController::class,'store']);
Route::get('/admin-login/manage-category',[AddCategoryController::class,'show']);