<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
  protected $model = Product::class;

  public function definition()
  {
    return [
      'title' => $this->faker->sentence(4),
      'slug' => $this->faker->slug(4),
      'category_id' => ProductCategory::class,
      'description' => $this->faker->paragraph,
      'page_title' => $this->faker->sentence,
      'meta_description' => $this->faker->sentence,
      'featured' => $this->faker->boolean,
      'image' => sprintf('img%s.jpg', $this->faker->numberBetween(1, 5)),
      'status' => $this->faker->randomElement(['draft', 'pending', 'published']),
    ];
  }
}
