@extends('gregquest.master')

@section('content')
    <?php 
#        dump($monster);
#        dump($adjective);
    ?>

    <div id="monster_wrapper">
        <img src="/images/monster.png">

        <h3>A {{ $adjective['adj'] }} {{ $monster['name'] }} appeared!</h3>
    </div>

    <form method='POST'>
        <h3>What would you like to do?</h3>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Select an action...</button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Kill it!</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </form>

@endsection
