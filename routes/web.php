<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/LOGIN', function()
{return view('LOGIN');
});

Route::get('/database',[AuthController::class,'database']);
Route::get('/vemaimaia',[AuthController::class,'vemaimaia']);


Route::post('/main/checklogin', [AuthController::class,'checklogin']);
Route::get('main/successlogin', [AuthController::class,'successlogin']);
Route::get('main/logout', [AuthController::class,'logout']);