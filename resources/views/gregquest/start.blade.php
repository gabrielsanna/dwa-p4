@extends('gregquest.master')

@section('content')

    <h3>Start A New Game</h3>

    <form action="/buildnewgame" method='POST'>
        {{ csrf_field() }}
        
        <div class="form-group">
            <label>Player name: </label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label>Choose a class: </label>
            <select class="form-control form-control-lg" name="class">
                <option>Fighter</option>
                <option>Wizard</option>
                <option>Sneaky Person</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary">
    </form>

@endsection
