<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\PublicController;

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

/* Route::get('/', function () {
    return view('home');
}); */
//?rotta della home 
Route::get('/',[PublicController::class,'home'])->name('home');

//!elenco 
//!card dettaglio
//!form per inserimento fumetti

//?rotta del create del form
Route::get('/comics/create',[ComicController::class,'create'])->name('comics.create');

Route::post('/comics/store',[ComicController::class,'store'])->name('store.comics');

//?rotta delle card

Route::get('/comics',[ComicController::class,'index'])->name('comics.index');

//?rotta del dettaglio

Route::get('/comics/show/{data}',[ComicController::class,'show'])->name('comics.show');

//?rotta per l'update

Route::get('/comics/edit/{data}',[ComicController::class,'edit'])->name('comics.edit');

Route::put('/comics/update/{data}',[ComicController::class,'update'])->name('comics.update');


//? rotta pr il delete 

Route::delete('/comics/delete/{data}',[ComicController::class,'destroy'])->name('comics.delete');
