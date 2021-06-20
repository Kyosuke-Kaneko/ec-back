<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(10)->create();
        // $this->call(UsersTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(Purchase_historiesTableSeeder::class);
        // $this->call(Purchase_detailsTableSeeder::class);
    }
}
