<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('productos', function () {
//   $products = Product::with('category')->get();
  $products = Product::query()
      ->select(['title', 'slug', 'category_id', 'image'])
      ->with('category:id,title,slug')
      ->get();

  return view('products', ['products' => $products]);
});
