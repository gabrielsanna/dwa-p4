@extends('gregquest.master')

@section('content')
        <h3>Past Encounters</h3>

        <table class="table">
            <tr>
                <th>Type</th>
                <th>Monster</th>
                <th>Strength</th>
                <th>HP</th>
            </tr>
        @foreach($encounters as $encounter)
            @foreach($encounter->adjectives as $adjective)
            <tr>
                <td>{{ $adjective["adj"] }} </td>
                <td>{{ $encounter["name"] }}</td>
                <td>{{ $adjective["str_mod"] + $encounter["str"] }}</td>
                <td>{{ $adjective["hp_mod"] + $encounter["hp"] }}</td>
            </tr>
            @endforeach
        @endforeach
        </table>

@endsection
