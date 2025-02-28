<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'customerID' => 'CUST001',
                'firstName' => 'Sharindu',
                'lastName' => 'Malaka',
                'email' => 'sharindum@gmail.com',
                'password' => Hash::make('password123'), // Hashed password
                'phone' => '0771234567',
                'address' => '123 Main Street, Eheliyagoda.',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customerID' => 'CUST002',
                'firstName' => 'Nadeesha',
                'lastName' => 'Raviraj',
                'email' => 'nadeeshar@gmail.com',
                'password' => Hash::make('securepass'),
                'phone' => '0779876543',
                'address' => '456 Market Road, Colombo 7.',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customerID' => 'CUST003',
                'firstName' => 'Rangana',
                'lastName' => 'Praveen',
                'email' => 'ranganap@gmail.com',
                'password' => Hash::make('alice123'),
                'phone' => '0784567890',
                'address' => '789 Panawala Road, Avissawella.',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
