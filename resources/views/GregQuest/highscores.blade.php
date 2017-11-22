@extends('gregquest.master')

@section('content')
    <form method='GET'>
        <h3>High Scores</h3>

        <table class="table">
        @foreach($highScores as $indexKey => $score)
            <tr>
                <td>{{ $indexKey+1 }} </td>
                <td>{{ $score["name"] }}</td>
                <td>{{ $score["class"] }}</td>
                <td>{{ $score["score"] }}</td>
            </tr>
        @endforeach
        </table>
    </form>

@endsection
