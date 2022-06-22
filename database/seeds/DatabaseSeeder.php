<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(MapelSeeder::class);
        $this->call(SiswaSeeder::class);
    }
}
