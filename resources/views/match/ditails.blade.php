@extends('layouts.app')

@section('content')
@include('layouts.header')

    @include('layouts.sidebar')
    <span class="table-title">Players of the match:{{$playersmatch->team1}} VS {{$playersmatch->team2}}</span>
    <div class="home-table">
        <table>
            <thead>
                <tr>
                    <th> NO </th>
                    <th>Player Name</th>
                    <th>position in the match</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($playersmatch->players as $playermatch)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $playermatch->name }}</td>
                        <td>{{ $playermatch->position->position }}</td>
                    </tr>
                @endforeach

            <tbody>
        </table>
    </div>
    
    <form class="form" method="POST" action="{{url('match/addMatchDitails/'.$playersmatch->id)}}">
        @csrf
        <h2>Add player for the match</h2>
        <p type="name:"><input name="name" placeholder=""></p>
        <div class="input-field col s12">
            <p type="Position:" display="inline"></p>
            <select name="position">
                @foreach ($positions as $position)
                    <option value="{{$position->id}}">{{$position->position}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Add player</button>

    </form>


@endsection
