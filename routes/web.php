<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoftwaresController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionHeaderController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', [SoftwaresController::class, 'index']);
Route::get('/software/{softwares:title}', [SoftwaresController::class, 'show'])->name('detail');
Route::get('/cartlist', [CartController::class, 'index'])->name('cartlist')->middleware('auth');
Route::get('/cart/{sw:id}', [CartController::class, 'store'])->middleware('auth');
Route::get('/delete/{sw:id}', [CartController::class, 'destroy'])->middleware('auth');
Route::get('/receipt', [TransactionHeaderController::class, 'index'])->middleware('auth');
Route::get('/history', [TransactionHeaderController::class, 'history'])->middleware('auth');
Route::get('/managesw', [SoftwaresController::class, 'manage'])->middleware('auth');
Route::get('/filter', [SoftwaresController::class, 'filter'])->middleware('auth');
Route::get('/deletesw/{sw:id}',[SoftwaresController::class, 'deletesw'])->middleware('auth');
Route::get('/updatesw/{sw:title}',[SoftwaresController::class, 'updatesw'])->name('updatesw')->middleware('auth');
Route::get('/checkout/{total}', function($totals){
    return view('checkout', ['total' => $totals]);
})->middleware('auth');
Route::get('/profile', function(){
    return view('profile');
})->middleware('auth');
Route::get('/createsw', function () {
    return view('createsw');
})->middleware('auth');

Auth::routes();


Route::post('/logpro', [LoginController::class, 'login']);
Route::post('/regpro', [RegisterController::class, 'store']);
Route::post('/trans/{total}', [TransactionHeaderController::class, 'store']);
Route::post('/search', [SoftwaresController::class, 'store']);
Route::post('/updateprof', [UpdateProfileController::class, 'update']);
Route::post('/create', [SoftwaresController::class, 'insert']);
Route::post('/update/{sw}', [SoftwaresController::class, 'updateSofw']);
