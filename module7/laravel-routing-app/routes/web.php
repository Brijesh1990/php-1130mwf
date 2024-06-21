<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/',[HomeController::class,'index']);