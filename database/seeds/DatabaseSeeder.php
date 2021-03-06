<?php

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
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CouponsSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);
    }
}
