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
        // $this->call(UsersTableSeeder::class);
        //$this->call(LiveSearchSeeder::class);
        $this->call(WarehousesTableDataSeeder::class);
        // $this->call(StoragesTableDataSeeder::class);
        

    }
}
