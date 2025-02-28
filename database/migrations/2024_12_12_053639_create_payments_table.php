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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('paymentID');
            $table->string('paymentMethod');
            $table->integer('amountPaid');
            $table->date('paymentDate');
            $table->string('orderID');
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('orderID')->references('orderID')->on('orders')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
