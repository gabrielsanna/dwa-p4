<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HighScore;
use App\Noun;
use App\Adjective;

class HighScoreController extends Controller
{
	public function index () {
		$highScores = HighScore::orderBy("score", "desc")->get();

    	return view('gregquest.highscores')->with('highScores', $highScores);
    }

    public function debug () {
        $highScores = HighScore::orderBy("score", "desc")->get();

        return view('gregquest.debug')->with('highScores', $highScores);
    }

    public function win () {
        $lowest = HighScore::orderBy("score")->first();

        $playerName = session('name');
        $playerClass = session('class');
        $playerScore = session('score');

        if ($lowest['score'] <= $playerScore) {
            $lowest->delete();

            $newScore = new HighScore;

            $newScore->name = $playerName;
            $newScore->class = $playerClass;
            $newScore->score = $playerScore;
            $newScore->created_at = date("Y-m-d H:i:s");
            $newScore->updated_at = date("Y-m-d H:i:s");

            $newScore->save();
        }

        $highScores = HighScore::orderBy("score", "desc")->get();

        return view('gregquest.highscores', ['highScores' => $highScores, 'win' => "true"]);
    }

    public function lose () {
        $lowest = HighScore::orderBy("score")->first();

        $playerName = session('name');
        $playerClass = session('class');
        $playerScore = session('score');

        if ($lowest['score'] <= $playerScore) {
            $lowest->delete();

            $newScore = new HighScore;

            $newScore->name = $playerName;
            $newScore->class = $playerClass;
            $newScore->score = $playerScore;
            $newScore->created_at = date("Y-m-d H:i:s");
            $newScore->updated_at = date("Y-m-d H:i:s");

            $newScore->save();
        }

        $highScores = HighScore::orderBy("score", "desc")->get();

        return view('gregquest.highscores', ['highScores' => $highScores, 'win' => "false"]);
    }

    public function newHighScore (Request $request) {
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

            $newScore->save();
		}

        // New query to get updated values
        $highScores = HighScore::orderBy("score", "desc")->get();
    	return view('gregquest.highscores')->with('highScores', $highScores);
    }

    public function updateHighScore (Request $request) {
        $playerName = $request->input('playerName');
        $playerScore = $request->input('playerScore');

        HighScore::where('name', $playerName)->update(['score' => $playerScore]);

        return \Redirect::route('highscores');
    }

    public function encounters () {
        $pastMonsters = Noun::with('adjectives')->get();

        return view('gregquest.encounters')->with('encounters', $pastMonsters);
    }
}
