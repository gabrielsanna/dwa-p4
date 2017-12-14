@extends('gregquest.master')

@section('content')

    <div class="row">
        <div class="col-4">
            <img class="monster" src="/images/{{ $monster['name'] }}.png">

            <div class="alert alert-info" role="alert">
                <table>
                    <tr>
                        <td><strong>Score: </strong></td>
                        <td>{{ $score }}</td>
                    </tr>
                    <tr>
                        <td><strong>Monsters remaining: </strong></td>
                        <td>{{ $monstersToKill }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <?php
            if (in_array($adjective['adj'][0], ['a','e','i','o','u'])) {
                $article = "An";
            } else {
                $article = "A";
            }
        ?>

        <div class="col-8">
            <h3>{{ $article }} {{ $adjective['adj'] }} {{ $monster['name'] }} appeared!</h3>

            <p>Strength: {{ $monster['str'] + $adjective['str_mod'] }}<br>
            HP: {{ $monster['hp'] + $adjective['hp_mod'] }}</p>

            <form action="/fight" method='POST'>
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">What would you like to do?</label>
                    <select class="form-control form-control-lg" name="action">
                        <option>Kill it!</option>
                        <option>Run away!</option>
                        <option>Lie down and give up!</option>
                    </select>
                </div>

                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

@endsection
