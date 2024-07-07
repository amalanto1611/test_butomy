<?php

use Illuminate\Database\Seeder;
use Database\Seeders\ProductsTableSeeder;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
    }
}
