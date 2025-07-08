<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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

//Route::get('/',[HomeController::class,'index']);

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/allnews','allnews')->name('allnews');
    Route::get('/allagenda','allagenda')->name('allagenda');
    Route::get('/news/{idnews}','readmore_allnews')->name('allnews.news');
});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/regrister', [AuthController::class, 'regrister'])->name('regrister');
Route::post('/regrister', [AuthController::class, 'PostRegrister'])->name('regrister');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'PostLogin'])->name('login');
Route::get('/reload-captcha', [AuthController::class, 'ReloadCaptcha']);

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('profile.destroy');
});