<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavController;
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

Route::post('/saveuser', [AuthController::class, 'saveuser']);

Route::post('/loginuser', [AuthController::class, 'loginuser']);

Route::get('/home', [NavController::class, 'home']);

Route::get('/search', [NavController::class, 'search']);

Route::get('/management', [NavController::class, 'management']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/borrow', [NavController::class, 'borrowView']);
    Route::get('/return', [NavController::class, 'returnView']);
    Route::get('/add', [NavController::class, 'tambahView']);
    Route::get('/detail', [NavController::class, 'detail']);
    Route::post('/tambah', [NavController::class, 'tambah']);
    Route::post('/borrowCar', [NavController::class, 'borrow']);
    Route::post('/returnCar', [NavController::class, 'return']);
    Route::get('/list', [NavController::class, 'list']);
});