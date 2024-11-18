<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{id}/products', [CategoryController::class, 'getProductsByCategory']);

Route::group(['middleware' => ['role']], function () {
    Route::apiResource('products', ProductController::class);
    Route::get('/product/cheapest', [ProductController::class, 'cheapest']);
    Route::get('/product/most-expensive', [ProductController::class, 'mostExpensive']);
    Route::put('/product/update-prices', [ProductController::class, 'bulkUpdatePrices']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['role'])->group(function () {
    Route::get('/products', [ProductController::class, 'index']); // Contoh endpoint GET
    Route::post('/products', [ProductController::class, 'store']); // Contoh endpoint POST
    Route::put('/products/{id}', [ProductController::class, 'update']); // Contoh endpoint PUT
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Contoh endpoint DELETE
});

Route::post('/products/{id}/restore', [ProductController::class, 'restoreProduct']);
