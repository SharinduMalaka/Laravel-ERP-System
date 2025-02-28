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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('orderID')->primary();
            $table->date('orderDate');
            $table->integer('totalPrice');
            $table->integer('productQuantity');
            $table->string('orderStatus');
            $table->string('customerID', 255);  // Ensure consistency with `customers` table
            $table->timestamps();

            // Foreign key relationship
            $table->foreign('customerID')->references('customerID')->on('customers')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
