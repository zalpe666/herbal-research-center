<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPlantController;
use App\Http\Controllers\HerbalGardenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhytochemistryController;
use App\Http\Controllers\AnimalResearchController;
use App\Http\Controllers\HistologyController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HerbalTestingServicesController;

Route::get('/', function () {return view('welcome');});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/herbal-garden', [HerbalGardenController::class, 'index'])->name('herbal-garden.index');
Route::get('/herbal-garden/plants', [HerbalGardenController::class, 'plants'])->name('herbal-garden.plants');
Route::get('/herbal-garden/plants/{plant:slug}', [HerbalGardenController::class, 'show'])->name('herbal-garden.show');

Route::get('/herbal-testing-services', [HerbalTestingServicesController::class, 'index'])->name('herbal-testing-services.index');
Route::get('/herbal-testing-services/extraction', [HerbalTestingServicesController::class, 'extraction'])->name('herbal-testing-services.extraction');

Route::get('/phytochemistry', [PhytochemistryController::class, 'index'])->name('phytochemistry.index');
Route::get('/animal-research', [AnimalResearchController::class, 'index'])->name('animal-research.index');
Route::get('/histology', [HistologyController::class, 'index'])->name('histology.index');
Route::get('/animal-research', [AnimalResearchController::class, 'index'])->name('animal-research.index');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{plantHerb:slug}', [ShopController::class, 'show'])->name('shop.show');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])
        ->name('cart');

    Route::post('/cart/add', [CartController::class, 'add'])
        ->name('cart.add');

    Route::delete('/cart/{variation}', [CartController::class, 'remove'])
        ->name('cart.remove');
});


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
