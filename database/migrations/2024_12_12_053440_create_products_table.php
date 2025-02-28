<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the 'products' table
        Schema::create('products', function (Blueprint $table) {
            $table->string('productID', 36)->primary();
            $table->string('productName');
            $table->string('productDescription')->nullable();
            $table->integer('price');
            $table->integer('quantity');
            $table->string('brand')->nullable();
            $table->string('categoryID', 36); // Matches length of categoryID in categories
            $table->string('cartID', 36)->nullable();
            $table->string('image')->nullable(); // Column for storing image paths
            $table->boolean('is_featured')->default(false); // Single definition for 'is_featured'
            $table->timestamps();
            $table->engine = 'InnoDB';

            // Foreign key for 'categoryID'
            $table->foreign('categoryID')
                  ->references('categoryID')
                  ->on('categories')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'products' table
        Schema::dropIfExists('products');
    }
};
