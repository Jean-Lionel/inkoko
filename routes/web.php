<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\VainqueurController;
use App\Http\Controllers\VenteOeufController;
use App\Http\Controllers\VentePouleController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\LaravelChartController;
use App\Http\Controllers\PerteProduitController;
use App\Http\Controllers\FileAlimentationController;

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

Route::get('/', function () {
    if(!auth()->user()){
        return view("auth.login");
    }else{
        return view('dashboard');
    }
});

Route::get("chart", [LaravelChartController::class, 'chart']);
Route::resource("rapport", RapportController::class);
Route::get("file_alimentation", [RapportController::class , 'file_alimentation'])->name('file_alimentation');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('admin/produit', ProduitController::class);
Route::resource('admin/animal', AnimalController::class);
Route::resource('hello', 'HelloController');
Route::resource('file-alimentation', FileAlimentationController::class);
Route::resource('vainqueur', VainqueurController::class);
Route::resource('client', ClientController::class);
Route::resource('fournisseur', FournisseurController::class);
Route::resource('vente-oeuf', VenteOeufController::class);
Route::resource('vente-poule', VentePouleController::class);
Route::resource('perte-produit', PerteProduitController::class);