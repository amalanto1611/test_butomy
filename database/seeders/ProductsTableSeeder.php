<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Wireless Mouse',
                'description' => 'A high-precision wireless mouse with ergonomic design.',
                'price' => 29.99,
                'quantity' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'A durable mechanical keyboard with customizable RGB lighting.',
                'price' => 79.99,
                'quantity' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USB-C Hub',
                'description' => 'A versatile USB-C hub with multiple ports for connectivity.',
                'price' => 39.99,
                'quantity' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Noise-Cancelling Headphones',
                'description' => 'Over-ear noise-cancelling headphones with superior sound quality.',
                'price' => 199.99,
                'quantity' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'A feature-packed smartwatch with fitness tracking and notifications.',
                'price' => 149.99,
                'quantity' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Portable SSD',
                'description' => 'A high-speed portable SSD with 1TB of storage capacity.',
                'price' => 99.99,
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bluetooth Speaker',
                'description' => 'A compact Bluetooth speaker with powerful sound and long battery life.',
                'price' => 59.99,
                'quantity' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '4K Monitor',
                'description' => 'A 27-inch 4K monitor with vibrant colors and high resolution.',
                'price' => 349.99,
                'quantity' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gaming Chair',
                'description' => 'An ergonomic gaming chair with adjustable features and lumbar support.',
                'price' => 249.99,
                'quantity' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'External Hard Drive',
                'description' => 'A 2TB external hard drive for reliable backup and storage.',
                'price' => 89.99,
                'quantity' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


