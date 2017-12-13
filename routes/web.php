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

Route::any('/greg',[
    'as' => 'greg',
    'uses' => 'MonsterController@greg'
]);

# Routes for high scores
Route::post('/highscores', 'HighScoreController@newHighScore');
Route::post('/updatehighscore', 'HighScoreController@updateHighScore');

Route::get('/highscores',[
    'as' => 'highscores',
    'uses' => 'HighScoreController@index'
]);

Route::get('/win',[
    'as' => 'win',
    'uses' => 'HighScoreController@win'
]);

Route::get('/lose',[
    'as' => 'lose',
    'uses' => 'HighScoreController@lose'
]);

# Routes for debug purposes
Route::any('/debug', 'HighScoreController@debug');