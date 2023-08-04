<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UomController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PurchaseOrderController;
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
    return view('dashlite01/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/stock-inventory', [InventoryController::class, 'stock'])  // Item Inventory
    ->middleware(['auth', 'verified'])->name('stock-inventory');

Route::get('/air-stock-inventory', [InventoryController::class, 'stockAir'])  // Stock Inventory
    ->middleware(['auth', 'verified'])->name('air-stock-inventory');


Route::get('/purchase-order', [PurchaseOrderController::class, 'index'])  // 
    ->middleware(['auth', 'verified'])->name('purchase-order');


Route::get('/acceptance-inspection-report', function () {
    return view('dashlite01/acceptance-inspection-report/index');
})->middleware(['auth', 'verified'])->name('acceptance-inspection-report');


Route::get('/requisition-issue-slip', function () {
    return view('dashlite01/requisition-issue-slip/index');
})->middleware(['auth', 'verified'])->name('requisition-issue-slip');

Route::get('/report/ssmi', function () {
    return view('dashlite01/report/ssmi');
})->middleware(['auth', 'verified'])->name('report-ssmi');

Route::get('/item', [ItemController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('item.index');

Route::get('/uom', [UomController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('uom.index');

Route::get('/category', [CategoryController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('category.index');

Route::get('/supplier', [SupplierController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('supplier.index');

Route::get('/office', [OfficeController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('office.index');

require __DIR__.'/auth.php';
