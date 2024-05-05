<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', function () {

    $comics = Comic::all();

    return view('welcome', compact('comics'));
})->name('home');


Route::get('/comics/{comic}', function ($id) {
    $comic = Comic::findOrFail($id);
    return view('show', compact('comic'));
})->name('show');
