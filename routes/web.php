<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
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
    return view('welcome');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/accueil', function () {
    return view('Welcome');
});
Route::get('/menu', function () {
    return view('Menu');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/form', [HotelController::class, 'create'])->name('form');
Route::post('/', [HotelController::class, 'store'])->name('store');
Route::get('/list', [HotelController::class, 'list'])->name('list');
Route::delete('/delete/{id}', [HotelController::class, 'delete'])->name('delete');
Route::get('/hotel/{id}/edit', [HotelController::class, 'edit'])->name('edit');
Route::post('/hotel/{id}/update', [HotelController::class, 'update'])->name('update');