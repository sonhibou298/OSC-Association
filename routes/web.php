<?php

use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PaysController;
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

Route::get('/   ', function () {
    return view('welcome');
});

Route::get('/pays', [PaysController::class, 'index'])->name('ListePays');
Route::get('/pays/create', [PaysController::class, 'create'])->name('CreerPays')->middleware(['auth']);
Route::post('/pays/store', [PaysController::class, 'store'])->name('AjoutPays');
Route::get('/pays/delete/{pays}', [PaysController::class, 'destroy'])->name('SupprimerPays');

Route::get('entreprise/index', [EntrepriseController::class, 'index'])->name('ListeEntreprise');
Route::get('entreprise/create', [EntrepriseController::class, 'create'])->name('CreerEntreprise');
Route::post('entreprise/store', [EntrepriseController::class, 'store'])->name('AjouterEntreprise');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

