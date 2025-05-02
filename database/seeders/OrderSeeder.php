<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'customer_id' => 1,
            'menu_id'     => 2,
            'quantity'    => 3,
            'total_price' => 45000, // contoh: harga 15000 x 3
        ]);

        Order::create([
            'customer_id' => 2,
            'menu_id'     => 4,
            'quantity'    => 1,
            'total_price' => 25000,
        ]);

        Order::create([
            'customer_id' => 1,
            'menu_id'     => 5,
            'quantity'    => 2,
            'total_price' => 40000,
        ]);
    }
}
