<?php

use App\Http\Controllers\AppBackend;
use Illuminate\Support\Facades\Route;
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

Route::get("quran/", [AppBackend::class, "getData"]  );

// Route to handle redirection to a specific ayah of a surah
Route::get('/ayah/{surah}/{ayah}', [AppBackend::class, 'redirectToAyah'])->name('redirect-to-ayah');


