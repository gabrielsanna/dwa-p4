<?php

use Illuminate\Database\Seeder;

class AdjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adjectives = array("angry", "spunky", "cheerful", "organic");

    	foreach ($adjectives as $adjective) {
    		DB::table('adjectives')->insert([
    			'adj' => $adjective,
    			'str_mod' => rand(-3, 3),
    			'hp_mod' => rand(-9, 10),
    		]);
    	}
    }
}
