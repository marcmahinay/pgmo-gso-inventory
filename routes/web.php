<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UomController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashlite/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inventory', [InventoryController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('inventory');

Route::get('/item', [ItemController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('item.index');

Route::get('/uom', [UomController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('uom.index');

Route::get('/category', [CategoryController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('category.index');

Route::get('/supplier', [SupplierController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('supplier.index');

require __DIR__.'/auth.php';
