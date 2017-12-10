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

    public function debug () {
        return view('gregquest.debug');
    }

    public function newHighScore (Request $request) {
        dump($request);

    	$lowest = HighScore::orderBy("score")->first();

        $playerName = $request->input('playerName');
        $playerClass = $request->input('playerClass');
        $playerScore = $request->input('playerScore');

		if ($lowest['score'] <= $playerScore) {
			$lowest->delete();

            $newScore = new HighScore;

            $newScore->name = $playerName;
            $newScore->class = $playerClass;
            $newScore->score = $playerScore;
            $newScore->created_at = date("Y-m-d H:i:s");
            $newScore->updated_at = date("Y-m-d H:i:s");

            dump($newScore);
            $newScore->save();
		}

        // New query to get updated values
        $highScores = HighScore::orderBy("score", "desc")->get();
    	return view('gregquest.highscores')->with('highScores', $highScores);
    }
}
