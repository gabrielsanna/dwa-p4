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
    	$nouns = array("dragon", "goblin", "ooze", "gremlin");

    	foreach ($nouns as $noun) {
    		DB::table('nouns')->insert([
    			'name' => $noun,
    			'str' => rand(1, 6),
    			'hp' => rand(10, 20),
    			'image_url' => '/'.$noun.'.png',
    		]);
    	}
    }
}
