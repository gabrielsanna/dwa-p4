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

		return view('gregquest.monster', ['monster' => $monster, 'adjective' => $adjective]);
    }

    public function greg () {
    	$adjectiveList = Adjective::all();

		$monster = array(
    		"name" => "Greg",
    		"str" => 999,
    		"hp" => 999,
		);

		$adjective = $adjectiveList->random();

		return view('gregquest.monster', ['monster' => $monster, 'adjective' => $adjective]);
    }

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
