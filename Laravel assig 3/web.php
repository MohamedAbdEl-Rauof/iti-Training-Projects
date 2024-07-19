<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users/insert', [UserController::class, 'Insert']);
Route::get('/index', [UserController::class, 'Select']);
Route::get('/users/update', [UserController::class, 'Update']);
Route::get('/users/delete', [UserController::class, 'Delete']);