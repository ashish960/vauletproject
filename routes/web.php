<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//index
Route::get('/index',[UserController::class,'index']);

//signup
Route::get('/signup',[UserController::class,'signup']);
Route::post('/signup',[UserController::class,'register'])->name('user.register');

//login
Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'userlogin'])->name('user.login');

//sessionend
Route::get('/sessionend',[UserController::class,'sessionend'])->name('user.sessionend');


//add money to balance
Route::get('/addmoney',[UserController::class,'addmoney'])->name('user.addmoney');
Route::post('/addmoneyinacc',[UserController::class,'addmoneyinacc'])->name('user.addmoneyinacc');



//check balance
Route::get('/checkbalance',[UserController::class,'checkbalance'])->name('user.checkbalance');