@extends('gregquest.master')

@section('content')
    <form method='GET'>
        <h3>High Scores</h3>

        <table class="table">
            <tr>
                <th>Place</th>
                <th>Player Name</th>
                <th>Class</th>
                <th>Score</th>
            </tr>
        @foreach($highScores as $key => $score)
            <tr>
                <td>{{ $key+1 }} </td>
                <td>{{ $score["name"] }}</td>
                <td>{{ $score["class"] }}</td>
                <td>{{ $score["score"] }}</td>
            </tr>
        @endforeach
        </table>
    </form>

@endsection
