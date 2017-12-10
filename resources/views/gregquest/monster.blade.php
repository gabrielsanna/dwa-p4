@extends('gregquest.master')

@section('content')

    <div class="monster-wrapper">
        <img src="/images/monster.png">
    </div>

    <?php
        if (in_array($adjective['adj'][0], ['a','e','i','o','u'])) {
            $article = "An";
        } else {
            $article = "A";
        }
    ?>

    <div class="monster-wrapper">
        <h3>{{ $article }} {{ $adjective['adj'] }} {{ $monster['name'] }} appeared!</h3>

        <p>Strength: {{ $monster['str'] + $adjective['str_mod'] }}<br>
        HP: {{ $monster['hp'] + $adjective['hp_mod'] }}</p>

        <form action="/monster" method='POST'>
            <h3>What would you like to do?</h3>

            <select class="form-control form-control-lg">
                <option>Kill it!</option>
                <option>Run away!</option>
                <option>Lie down and give up!</option>
            </select>

            <input type="submit">
        </form>
    </div>

@endsection
