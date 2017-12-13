<?php

use Illuminate\Database\Seeder;

class NounsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$nouns = array("acorn", "alien", "blob", "cactus", "cowbat", "cyclops", "gloogy", "frogthing", 
                       "stool", "robotbee", "shrug", "sweatbeast"
                    );

    	foreach ($nouns as $noun) {
    		DB::table('nouns')->insert([
    			'name' => $noun,
    			'str' => rand(5, 20),
    			'hp' => rand(10, 50),
    			'image_url' => '/images/'.$noun.'.png',
    		]);
    	}
    }
}
