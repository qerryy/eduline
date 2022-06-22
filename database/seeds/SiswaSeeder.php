<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{

    public function run()
    {
        DB::table('siswas')->insert([
        	[
        		'name' => 'Budi',
        		'phone' => '083333',
        		'gender' => 'Perempuan',
        		'mapel_id' => 2,
        	],
        ]);
    }
}
