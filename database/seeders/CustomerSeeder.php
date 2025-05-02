<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::insert([
            [
                'customer_name' => 'Rafi Syeghani',
                'email' => 'rafi@example.com',
                'phone' => '081234567890',
                'address' => 'Jl. Taman, Sidoarjo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'phone' => '082345678901',
                'address' => 'Jl. Durian No. 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'Citra Lestari',
                'email' => 'citra@example.com',
                'phone' => '083456789012',
                'address' => 'Jl. Apel No. 12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'Dodi Pranata',
                'email' => 'dodi@example.com',
                'phone' => '084567890123',
                'address' => 'Jl. Pisang No. 8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_name' => 'Eka Putri',
                'email' => 'eka@example.com',
                'phone' => '085678901234',
                'address' => 'Jl. Semangka No. 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
