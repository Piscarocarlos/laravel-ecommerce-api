<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'getProducts'] );
Route::get('categories', [ProductController::class, 'getCategories'] );
Route::get('categories/products/{id}', [ProductController::class, 'cateProd'] );

