<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();

      // Cada Producto va a pertenecer a una Categoría
      $table->foreignId('category_id')->constrained('product_categories');

      $table->string('title');
      $table->string('slug');
      $table->mediumText('description');
      $table->string('page_title')->nullable();
      $table->string('meta_description');
      $table->boolean('featured')->default(false);
      $table->string('image');
      $table->enum('status', ['draft', 'pending', 'published']);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('products');
  }
}
