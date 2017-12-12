<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noun;
use App\Adjective;

class MonsterController extends Controller
{
    public function index () {
		$monsterList = Noun::all();
		$adjectiveList = Adjective::all();

		$monster = $monsterList->random();
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
    		$monstersToKill = session('key');

    		if ($monstersToKill == 2) {
    			session(['monstersToKill' => 1]);
    			    									# <-- Go to Greg fight

    		} elseif ($monstersToKill == 1) {
    													# <-- Go to high scores page
    		} else {
    			$monstersToKill = $monstersToKill-1;
    			session(['monstersToKill' => $monstersToKill]);

    			return redirect()->action('MonsterController@index');
    		}
    	} elseif ($action == "Run away!") {
    		return redirect()->action('MonsterController@index');
    	} elseif ($action == "Lie down and give up!") {
    													# <-- Go to "you have died"
    	}
    }
}
