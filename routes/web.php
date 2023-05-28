<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/invoic', function () {
    return view('invoic');
});




Route::get('/phone',[PhoneController::class,'phonetype'])->name('phone');

Route::get('/a1',[PhoneController::class,'a1'])->name('a1');
Route::get('/a2',[PhoneController::class,'a2'])->name('a2');

Route::get('/getphonetype',[PhoneController::class,'checkout'])->name('checkout');// route that takes parametrs

Route::get('/checkout/{id}',[PhoneController::class,'checkout'])->name('checkout');// route that takes parametrs
Route::POST('/invoic',[PhoneController::class,'invoic'])->name('invoic');// route that takes parametrs


Route::get('/phonetype',[PhoneController::class,'phonetype'])->name('phonetype');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


