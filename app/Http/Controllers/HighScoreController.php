<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighScoreController extends Controller
{
    //return view('servermanager.query')->with('resultArray', $resultArray);

	public function index () {
    	return view('gregquest.highscores');
    }
}
