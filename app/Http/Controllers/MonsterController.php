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

    }
}
