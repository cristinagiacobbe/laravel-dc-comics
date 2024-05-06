<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Models\Comic;

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


Route::resource('comics', ComicController::class);

Route::get('/guestShow/{comic}', [GuestController::class, 'show'])->name('guestshow');

Route::get('/', function () {

    $comics = Comic::all();

    return view('welcome', compact('comics'));
})->name('home');
