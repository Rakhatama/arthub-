<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'auth']);
Route::post('/logout', [LoginController::class,'logout']);



Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);
Route::get('/',  [HomeController::class,'index']);


Route::get('/profile', [ProfileController::class,'index'])->middleware('auth');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/openstore', function () {
    return view('openstore');
});

Route::get('/infoMona', function () {
    return view('infoMona');
});

Route::get('/infoPatung', function () {
    return view('infoPatung');
});

Route::get('/infoStarry', function () {
    return view('infoStarry');
});

Route::get('/infoBerathan', function () {
    return view('infoBerathan');
});

Route::get('/paintings', function () {
    return view('paintings');
});

Route::get('/crafting', function () {
    return view('crafting');
});

Route::get('/other', function () {
    return view('other');
});


Route::get('/checkouts', [CheckoutController::class,'index'])->name('checkouts.index')->middleware('auth');
Route::get('/checkouts/create', [CheckoutController::class,'create'])->name('checkouts.create')->middleware('auth');
Route::post('/checkouts', [CheckoutController::class,'store'])->name('checkouts.store')->middleware('auth');





