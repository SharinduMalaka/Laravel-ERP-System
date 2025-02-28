<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'orderID' => 'OID001',
                'orderDate' => now()->subDays(3),
                'totalPrice' => 2500,
                'productQuantity' => 5,
                'orderStatus' => 'Pending',
                'customerID' => 'CUST001', // Ensure this customerID exists in the customers table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orderID' => 'OID002',
                'orderDate' => now()->subDays(2),
                'totalPrice' => 1500,
                'productQuantity' => 3,
                'orderStatus' => 'Completed',
                'customerID' => 'CUST002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orderID' => 'OID003',
                'orderDate' => now()->subDay(),
                'totalPrice' => 3200,
                'productQuantity' => 7,
                'orderStatus' => 'Shipped',
                'customerID' => 'CUST003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
//                 'quantity' => 100,
//                 'brand' => 'Bakery Delights',
//                 'categoryID' => 'C004', // Bakery
//                 'cartID' => null,
//                 'image' => 'public/images/products/bread.jpg',
//                 'is_featured' => false,
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ],
//             [