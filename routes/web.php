<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;

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

Route::get('/spp', function () {
    return view('home.master');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/fix', function () {
    return view('home.masterfix');
});

Route::controller(SppController::class)->group(function () {
    Route::get('/Spp', 'index')->name('Spp.index');
    Route::get('/Spp/create', 'create')->name('Spp.create');
    Route::post('/Spp', 'store')->name('Spp.store');
    Route::get('/Spp/{id}/edit', 'edit')->name('Spp.edit');
    Route::put('/Spp/{id}', 'update')->name('Spp.update');
    Route::delete('/Spp/{id}', 'destroy')->name('Spp.destroy');
});


Route::controller(SppController::class)->group(function () {
    Route::get('/Spp', 'index')->name('Spp.index');
    Route::get('/Spp/create', 'create')->name('Spp.create');
    Route::post('/Spp', 'store')->name('Spp.store');
    Route::get('/Spp/{id}/edit', 'edit')->name('Spp.edit');
    Route::put('/Spp/{id}', 'update')->name('Spp.update');
    Route::delete('/Spp/{id}', 'destroy')->name('Spp.destroy');
});

Route::resource('/kelas', KelasController::class);

