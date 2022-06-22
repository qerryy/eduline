<?php

use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{

    public function run()
    {
        DB::table('mapels')->insert([
        	[
        		'mapel_name' => 'Bhs Indonesia',
        		'total_price' => 50000,
        	],
        	[
        		'mapel_name' => 'Bhs Inggris',
        		'total_price' => 150000,
        	],
        	[
        		'mapel_name' => 'IPA',
        		'total_price' => 90000,
        	],
        	[
        		'mapel_name' => 'IPS',
        		'total_price' => 80000,
        	],
        ]);
    }
}
