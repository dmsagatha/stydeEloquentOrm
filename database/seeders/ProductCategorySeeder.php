<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
  public function run()
  {
    ProductCategory::query()->delete();

    ProductCategory::factory()->times(50)->create();
  }
}
