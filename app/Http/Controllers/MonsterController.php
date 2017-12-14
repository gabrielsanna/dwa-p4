<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noun;
use App\Adjective;
use HighScoreController;

class MonsterController extends Controller
{
    public function index () {
		$monsterList = Noun::all();
		$adjectiveList = Adjective::all();

		$monster = $monsterList->random();
		$adjective = $adjectiveList->random();

		$monstersToKill = session('monstersToKill');
		$score = session('score');

        session(['currentNoun' => $monster['name']]);
        session(['currentAdjective' => $adjective['adj']]);

		return view('gregquest.monster', ['monster' => $monster, 
			                              'adjective' => $adjective, 
			                              'monstersToKill' => $monstersToKill,
			                              'score' => $score
			                          ]);
    }

    public function greg () {
    	$adjectiveList = Adjective::all();

		$monster = array(
    		"name" => "Greg",
    		"str" => 10000,
    		"hp" => 10000,
		);

		$adjective = $adjectiveList->random();

		$monstersToKill = session('monstersToKill');
		$score = session('score');

		return view('gregquest.monster', ['monster' => $monster, 
			                              'adjective' => $adjective, 
			                              'monstersToKill' => $monstersToKill,
			                              'score' => $score
			                          ]);    }

    public function startNewGame () {
    	return view('gregquest.start');
    }

    public function buildNewGame (Request $request) {
    	session(['name' => $request->input('name')]);
    	session(['class' => $request->input('class')]);
    	session(['score' => 0]);
    	session(['monstersToKill' => 5]);

    	return redirect()->action('MonsterController@index');
    }

    public function fightResult (Request $request) {
    	$action = $request->input('action');

    	if ($action == "Kill it!") {
    		$monstersToKill = session('monstersToKill');

            # Add the most recent noun/adjective pair to the pivot table
            $currentNoun = session('currentNoun');
            $currentAdjective = session ('currentAdjective');

            $monster = Noun::where('name', $currentNoun)->first();
            $adjective = Adjective::where('adj', $currentAdjective)->first();
            $monster->adjectives()->save($adjective);

            # Decide what happens next based on how many monsters are left
    		if ($monstersToKill == 2) {
    			session(['monstersToKill' => 1]);

    			return \Redirect::route('greg');
    		} elseif ($monstersToKill == 1) {
    			# Give the player some points
    			$score = session('score');
    			$score = $score + rand (1, 50);
    			session(['score' => $score]);

    			return \Redirect::route('win');
    		} else {
    			# Decrement the number of monsters left to fight
    			$monstersToKill = $monstersToKill - 1;
    			session(['monstersToKill' => $monstersToKill]);

    			# Give the player some points
    			$score = session('score');
    			$score = $score + rand (1, 50);
    			session(['score' => $score]);

    			return redirect()->action('MonsterController@index');
    		}
    	} elseif ($action == "Run away!") {
    		return redirect()->action('MonsterController@index');
    	} elseif ($action == "Lie down and give up!") {
    		return \Redirect::route('lose');
    	}
    }
}
