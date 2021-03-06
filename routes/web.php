<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MembreController;
use App\Models\Genre;
use App\Models\Membre;
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

Route::get('/', function(){
    $DBMembre= Membre::all();
    $DBGenre = Genre::all();
    return view("welcome", compact("DBGenre", "DBMembre"));
});

Route::resource("genres", GenreController::class );
Route::resource('membres', MembreController::class);
