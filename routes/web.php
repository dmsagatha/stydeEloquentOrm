<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('productos', function () {
  $products = Product::with('category')->get();

  return view('products', ['products' => $products]);
});
