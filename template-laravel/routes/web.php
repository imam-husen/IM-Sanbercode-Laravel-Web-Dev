<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\TableController;

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

Route::get('/', [HomeController::class,"index"]);
Route::get('/home',[HomeController::class,"home"]);
Route::get('/register',[AuthController::class,"register"]);
Route::post('/signup',[AuthController::class,"signup"]);
Route::get('/datatable',[DataTableController::class,"datatable"]);
Route::get('/table',[TableController::class,"table"]);





