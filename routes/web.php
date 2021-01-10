<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('productos', function () {
  $products = Product::all();

  return view('products', ['products' => $products]);
});
