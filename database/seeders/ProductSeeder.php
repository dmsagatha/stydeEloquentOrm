<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  public function run()
  {
    Product::query()->delete();

    $categories = ProductCategory::pluck('id');

    // A cada Producto asignarle entre 12 y 28 Categorías
    foreach ($categories as $categoryId) {
      Product::factory()->times(rand(12, 28))->create([
        'category_id' => $categoryId
      ]);
    }
  }
}
