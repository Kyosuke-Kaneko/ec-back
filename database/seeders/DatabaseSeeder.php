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
        for ($i=0; $i <= 10; $i++) {
            $this->call(ProductsTableSeeder::class);
        }
        // \App\Models\Product::factory(10)->create();
    }
}
