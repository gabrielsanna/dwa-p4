@extends('gregquest.master')

@section('content')
    <form method='GET'>

        @if( ! empty($win))
            @if($win == "true")
            <div class='alert alert-success'>
                <h5 class="text-center">You won!</h5>
            </div>
            @endif
            @if($win == "false")
            <div class='alert alert-danger'>
                <h5 class="text-center">You were defeated.</h5>
            </div>
            @endif
        @endif

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
