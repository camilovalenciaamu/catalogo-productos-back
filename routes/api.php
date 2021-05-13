<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    // Rutas para el flujo de Marcas
    Route::get('marcas', [BrandController::class, 'getBrands']);
    Route::get('marca/{id}', [BrandController::class, 'getBrand']);
    Route::delete('borrar-marca/{id}', [BrandController::class, 'deleteBrand']);
    Route::post('marca', [BrandController::class, 'createBrand']);
    Route::put('actualizar-marca/{id}', [BrandController::class, 'updateBrand']);

    // Rutas para el flujo de Productos
    Route::get('productos', [ProductController::class, 'getProducts']);
    Route::get('producto/{id}', [ProductController::class, 'getProduct']);
    Route::delete('borrar-producto/{id}', [ProductController::class, 'deleteProduct']);
    Route::post('producto', [ProductController::class, 'createProduct']);
    Route::put('actualizar-producto/{id}', [ProductController::class, 'updateProduct']);
});