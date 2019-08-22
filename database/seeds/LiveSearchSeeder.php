<?php

use Illuminate\Database\Seeder;

class LiveSearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\LiveSearch::class, 50)->create();        

    }
}
