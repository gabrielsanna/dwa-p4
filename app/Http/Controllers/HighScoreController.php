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

    public function newHighScore ($name, $class, $score) {
    	$highScores = HighScore::orderBy("score", "desc")->get();

    	foreach ($highScores as $highScore) {
    		if ($highScore['score'] <= $score) {
    			echo "hi";
    		}
    	}

    	return view('gregquest.highscores')->with('highScores', $highScores);
    }
}
