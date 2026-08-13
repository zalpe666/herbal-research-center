<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPlantController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/herbal-garden', [HomeController::class, 'herbalGarden']) ->name('herbal-garden');
Route::get('/herbal-garden/plants', [HomeController::class, 'plants'])->name('herbal-garden-plants.index');
Route::get('/herbal-garden/plants/{plant:slug}', [HomeController::class, 'herbalGardenShow'])->name('herbal-garden.show');


Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/plants', [AdminPlantController::class, 'index'])
        ->name('admin.plants');

    Route::get('/plants/create', [AdminPlantController::class, 'create'])
        ->name('admin.plants.create');

    Route::post('/plants', [AdminPlantController::class, 'store'])
        ->name('admin.plants.store');

    Route::get('/plants/{plant}/edit', [AdminPlantController::class, 'edit'])
        ->name('admin.plants.edit');

    Route::put('/plants/{plant}', [AdminPlantController::class, 'update'])
        ->name('admin.plants.update');

    Route::delete('/plants/{plant}', [AdminPlantController::class, 'destroy'])
        ->name('admin.plants.destroy');
});

require __DIR__ . '/auth.php';
