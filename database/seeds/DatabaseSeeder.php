<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(NounsTableSeeder::class);
        $this->call(AdjectivesTableSeeder::class);
        $this->call(HighScoresTableSeeder::class);
        $this->call(NounAdjectiveTableSeeder::class);
    }
}
