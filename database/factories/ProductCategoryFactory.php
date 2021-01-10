<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
  protected $model = ProductCategory::class;

  public function definition()
  {
    return [
      'title' => $this->faker->sentence(2),
      'slug' => $this->faker->slug(2),
      'description' => $this->faker->paragraph,
      'page_title' => $this->faker->sentence,
      'meta_description' => $this->faker->sentence,
      'featured' => $this->faker->boolean,
      'image' => sprintf('img%s.jpg', $this->faker->numberBetween(1, 5)),
    ];
  }
}
