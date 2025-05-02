<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'menu_name' => 'Nasi Goreng',
                'category' => 'Makanan',
                'price' => '20000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Nasi Bakar',
                'category' => 'Makanan',
                'price' => '15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Es Teh',
                'category' => 'Minuman',
                'price' => '5000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Coca Cola',
                'category' => 'Minuman',
                'price' => '10000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Nasi Goreng',
                'category' => 'Makanan',
                'price' => '20000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Dimsum Mentai',
                'category' => 'Makanan',
                'price' => '30000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
