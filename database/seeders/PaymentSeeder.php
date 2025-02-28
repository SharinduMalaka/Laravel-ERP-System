<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'paymentMethod' => 'Credit Card',
                'amountPaid' => 1500,
                'paymentDate' => now(),
                'orderID' => 'OID001', // Ensure this orderID exists in the orders table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paymentMethod' => 'PayPal',
                'amountPaid' => 2200,
                'paymentDate' => now(),
                'orderID' => 'OID002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'paymentMethod' => 'Cash on Delivery',
                'amountPaid' => 800,
                'paymentDate' => now(),
                'orderID' => 'OID003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
//                 'categoryID' => 'C005', // Snacks
//                 'cartID' => null,    