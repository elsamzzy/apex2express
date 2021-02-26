<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AirFreightController;
use App\Http\Controllers\CargoExpressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomBrookageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogisticsController;
use App\Http\Controllers\OceanFreightController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\WarehousingController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/custom', [CustomBrookageController::class, 'index'])->name('custom');
Route::get('/warehouses', [WarehousingController::class, 'index'])->name('warehouses');
Route::get('/cargo-express', [CargoExpressController::class, 'index'])->name('cargoexpress');
Route::get('/ocean-freight', [OceanFreightController::class, 'index'])->name('oceanfreight');
Route::get('/logistics', [LogisticsController::class, 'index'])->name('logistics');
Route::get('/air-freight', [AirFreightController::class, 'index'])->name('airfreight');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/track', [TrackController::class, 'index'])->name('track');
Route::post('/track', [TrackController::class, 'store']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);
