<?php

use Illuminate\Database\Seeder;

class BailersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bailer::class, 50)->create();
    }
}
