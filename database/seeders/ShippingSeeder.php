<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shippings')->insert([
            [
                'shippingID' => 'S001',
                'shippingDate' => now(),
                'shippingMethod' => 'Standard Delivery',
                'shippingAddress' => '123 Main Street, City, Country',
                'shippingStatus' => 'Shipped',
                'orderID' => 'OID001', // Ensure this orderID exists in the orders table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shippingID' => 'S002',
                'shippingDate' => now(),
                'shippingMethod' => 'Express Delivery',
                'shippingAddress' => '456 Oak Avenue, Town, Country',
                'shippingStatus' => 'Processing',
                'orderID' => 'OID002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shippingID' => 'S003',
                'shippingDate' => now(),
                'shippingMethod' => 'Same-Day Delivery',
                'shippingAddress' => '789 Pine Road, Village, Country',
                'shippingStatus' => 'Delivered',
                'orderID' => 'OID003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
