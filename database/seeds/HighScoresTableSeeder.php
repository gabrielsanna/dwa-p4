<?php

use Illuminate\Database\Seeder;

class HighScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$classes = array("Wizard", "Fighter", "Sneaky Person");
    	$honorifics = array("Lord", "Lady", "Mr.", "Ms.", "Miss", "Sir");

        for ($i = 1; $i <= 10; $i++) 
        {
            DB::table('high_scores')->insert([
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'name' => $honorifics[rand(0, 5)].' '.str_random(rand(5, 12)),
                'class' => $classes[rand(0, 2)],
                'score' => rand(0, 200),
            ]);
        }
    }
}
