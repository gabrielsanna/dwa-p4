@extends('gregquest.master')

@section('content')
    <form method='POST'>
        <h3>Project 4 Debug</h3>

        <div class="form-group">
            <label for="playerName">Player Name</label>
            <input class="form-control" id="playerName">
        </div>

        <div class="form-group">
            <label for="playerClass">Player Class</label>
            <select class="form-control" id="playerClass">
                <option>Fighter</option>
                <option>Wizard</option>
                <option>Sneaky Person</option>
            </select>
        </div>

        <div class="form-group">
            <label for="playerScore">Player Score</label>
            <input class="form-control" id="playerScore">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
