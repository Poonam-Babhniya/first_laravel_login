<?php
use App\HTTP\Controllers\FirController;
use App\HTTP\Controllers\UsersController;
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
Route::get('/register',[UsersController::class,'show']);
Route::get('/register/add',[UsersController::class,'addUser']);
Route::post('/register/add',[UsersController::class,'saveUser']);
Route::get('/login',[UsersController::class,'userlogin']);
Route::post('/login',[UsersController::class,'userlogin']);
Route::get('/logout',[UsersController::class,'logout']);

Route::get('/firs',[FirController::class,'show']);
Route::get('/firs/add',[FirController::class,'addFir']);
Route::post('/firs/add',[FirController::class,'saveFir']);
Route::get('/firs/edit/{id}',[FirController::class,'editFir']);
Route::post('/firs/edit/{id}',[FirController::class,'updateFir']);
Route::get('/firs/delete/{id}',[FirController::class,'deleteFir']);

Route::get('/', function () {
    return view('register');
});