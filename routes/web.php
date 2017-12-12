<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('/newgame', 'MonsterController@startNewGame');
Route::post('/buildnewgame', 'MonsterController@buildNewGame');

# Routes for monster encounters
Route::any('/monster', 'MonsterController@index');
Route::post('/fight', 'MonsterController@fightResult');

# Routes for high scores
Route::post('/highscores', 'HighScoreController@newHighScore');
#Route::any('/highscores', 'HighScoreController@index');

# Routes for debug purposes
Route::any('/debug', 'HighScoreController@debug');