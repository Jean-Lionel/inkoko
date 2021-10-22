<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\LaravelChartController;
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
    return view('welcome');
});

Route::get("chart", [LaravelChartController::class, 'chart']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('admin/produit', ProduitController::class);
Route::resource('admin/animal', AnimalController::class);
Route::resource('hello', 'HelloController');
Route::resource('file-alimentation', FileAlimentationController::class);