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
        Schema::create('categories', function (Blueprint $table) {
            $table->string('categoryID', 36)->primary(); // Ensure same length as in products
            $table->string('categoryName');
            $table->string('categoryDescription')->nullable();
            $table->string('image')->nullable();
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
        
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
