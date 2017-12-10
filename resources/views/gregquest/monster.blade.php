@extends('gregquest.master')

@section('content')

    <div id="monster-wrapper">
        <img src="/images/monster.png">
    </div>

    <?php
        if (in_array($adjective['adj'][0], ['a','e','i','o','u'])) {
            $article = "An";
        } else {
            $article = "A";
        }
    ?>

    <h3>{{ $article }} {{ $adjective['adj'] }} {{ $monster['name'] }} appeared!</h3>

    <p>Strength: {{ $monster['str'] + $adjective['str_mod'] }}<br>
    HP: {{ $monster['hp'] + $adjective['hp_mod'] }}</p>

    <form method='POST'>
        <h3>What would you like to do?</h3>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Select an action...</button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Kill it!</a>
                <a class="dropdown-item" href="#">Run away!</a>
                <a class="dropdown-item" href="#">Lie down and give up!</a>
            </div>
        </div>
    </form>

@endsection
