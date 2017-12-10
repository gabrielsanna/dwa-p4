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
}
