<?php

use App\Http\Livewire\CreerCv;
use App\Http\Livewire\ListeCv;
use App\Http\Livewire\Detail;
use App\Http\Livewire\ModifierCv;
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
Route::get('/editCv',ModifierCv::class)->name("editCv");
Route::get('/modification/{id}',[\App\Http\Controllers\HomeController::class, 'goEdit'])->name("home.goEdit");
Route::get('/listeRRecherche',[\App\Http\Controllers\HomeController::class, 'searchCv'])->name("home.searchCv");
Route::get('/recherche',[\App\Http\Controllers\HomeController::class, 'search'])->name("home.search");
//Route::get('/edit',ModifierCv::class)->name("modification");
Route::get('/creationCv',CreerCv::class)->name("creation");
Route::get('/detail',Detail::class)->name("detail");
Route::get('/Home',[\App\Http\Controllers\HomeController::class, 'index'])->name("home");
Route::get('/ListeCv',ListeCv::class)->name("liste");
Route::get('/', function () {
    return view('welcome');
});
