<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('productos', function (Request $request) {
//   $products = Product::with('category')->get();
  $products = Product::query()
      ->select(['title', 'slug', 'category_id', 'image'])
      ->with('category:id,title,slug')
      ->when($request->input('categoria'), function ($q, $categoryId) {
        $q->where('category_id', $categoryId);
      })
      ->simplePaginate();

  return view('products', ['products' => $products]);
});
