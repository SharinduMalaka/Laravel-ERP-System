<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'orderItemID' => 'O001',
                'itemQuantity' => 2,
                'subtotalPrice' => 1000.00,
                'productID' => 'P001', // Ensure this productID exists in the products table
                'orderID' => 'OID001', // Ensure this orderID exists in the orders table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orderItemID' => 'O002',
                'itemQuantity' => 1,
                'subtotalPrice' => 500.00,
                'productID' => 'P002',
                'orderID' => 'OID001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orderItemID' => 'O003',
                'itemQuantity' => 4,
                'subtotalPrice' => 2000.00,
                'productID' => 'P003',
                'orderID' => 'OID002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
