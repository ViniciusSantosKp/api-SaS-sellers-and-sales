<?php

use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\SellerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/sellers', [SellerController::class, 'store']);
Route::get('/sellers', [SellerController::class, 'show']);
Route::post('/sales', [SaleController::class, 'store']);
Route::get('/sales/{seller_id}', [SaleController::class, 'show']);
