<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PolygonsController;
use App\Http\Controllers\PolylinesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('welcome');
// })->name('home');

Route::get('/', [PageController::class, 'landingpage'])->name('home');

Route::get('/peta', [PageController::class, 'peta'])->middleware(['auth', 'verified'])->name('peta');

Route::get('/Tabel', [PageController::class, 'tabel'])->name('Tabel');

//Points
Route::post('/store-points', [PointsController::class, 'store'])->name('points.store');

Route::delete('/delete-points/{id}', [PointsController::class, 'destroy'])->name('points.delete');

Route::get('/edit-points/{id}', [PointsController::class, 'edit'])->name('points.edit');

Route::patch('/update-points/{id}', [PointsController::class, 'update'])->name('points.update');

//Polylines
Route::post('/store-polylines', [PolylinesController::class, 'store'])->name('polylines.store');

Route::delete('/delete-polylines/{id}', [PolylinesController::class, 'destroy'])->name('polylines.delete');

Route::get('/edit-polylines/{id}', [PolylinesController::class, 'edit'])->name('polylines.edit');

Route::patch('/update-polylines/{id}', [PolylinesController::class, 'update'])->name('polylines.update');

//Polygons
Route::post('/store-polygons', [PolygonsController::class, 'store'])->name('polygons.store');

Route::delete('/delete-polygons/{id}', [PolygonsController::class, 'destroy'])->name('polygons.delete');

Route::get('/edit-polygons/{id}', [PolygonsController::class, 'edit'])->name('polygons.edit');

Route::patch('/update-polygons/{id}', [PolygonsController::class, 'update'])->name('polygons.update');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
