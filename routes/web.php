<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\project;

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
Route::get('/',[project::class,'home']);
Route::get('/blogpage',[project::class,'blog']);
Route::get('/contactpage',[project::class,'contact']);
Route::get('/protfoliopage',[project::class,'protfolio']);
Route::get('/servicepage',[project::class,'service']);

