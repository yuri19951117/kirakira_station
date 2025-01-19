<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;


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

Route::get('/', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/vendors/create', [VendorController::class, 'create']);

Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store');

Route::get('/vendors/{id}', [VendorController::class, 'show']);


Route::get('/requests/create', [RequestController::class, 'create']);

Route::post('/requests/confirm', [RequestController::class, 'confirm'])->name('requests.confirm');

Route::get('/responses', [ResponseController::class, 'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
