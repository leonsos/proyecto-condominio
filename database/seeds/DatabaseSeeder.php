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
         $this->call(PermissionsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(ResidencesTableSeeder::class);
         $this->call(BuildingsTableSeeder::class);
    }
}
