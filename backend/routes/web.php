<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\MainController::class, 'main']);
Route::get('/login', [Controllers\AuthController::class,'login']);
Route::get('/registration', [Controllers\AuthController::class,'registration']);
Route::post('/login/check', [Controllers\AuthController::class, 'customLogin']);
Route::post('/registration/check', [Controllers\AuthController::class, 'customRegistration']);

Route::get('/user/{id}',function ($id){ return 'Profile ID: '. $id; });

