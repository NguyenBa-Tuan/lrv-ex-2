<?php

use App\Http\Controllers\ShowProductController;
use App\Http\Controllers\UserController;
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
});

Route::get('/product', [ShowProductController::class, 'index']);

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users/create', [UserController::class, 'create']);

Route::post('/users/create', [UserController::class, 'store']);

Route::get('/users/update/{id}', [UserController::class, 'edit']);
Route::post('/users/update/{id}', [UserController::class, 'update']);


