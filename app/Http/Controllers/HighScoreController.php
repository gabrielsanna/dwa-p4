<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HighScore;

class HighScoreController extends Controller
{
	public function index () {
		$highScores = HighScore::orderBy("score", "desc")->get();

    	return view('gregquest.highscores')->with('highScores', $highScores);
    }
}
