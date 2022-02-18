@extends('layouts.app')

@section('content')
    
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="home_container">
            <span class="table_title">the rank:</span>
            <div class="table_container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:10%">#</th>
                            <th style="width:30%">Team</th>
                            <th style="width:10%">pl</th>
                            <th style="width:10%">W</th>
                            <th style="width:10%">D</th>
                            <th style="width:10%">L</th>
                            <th style="width:10%">GD</th>
                            <th style="width:10%">Pts</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td style="width:10%">{{ $team->rank }}</td>
                                <td style="width:30%">{{ $team->name }}</td>
                                <td style="width:10%">{{ $team->played }}</td>
                                <td style="width:10%">{{ $team->wins }}</td>
                                <td style="width:10%">{{ $team->draws }}</td>
                                <td style="width:10%">{{ $team->losses }}</td>
                                <td style="width:10%">{{ $team->losses }}</td>
                                <td style="width:10%">{{ $team->points }}</td>
                            </tr>
                        @endforeach
                    <tbody>
                </table>
            </div>
            <div class="current_match">
                <span class="title">current matches</span>
                <div class="scrollable">
                    <ul>
                        @foreach ($current_matches as $match)
                        <li>{{$match->team1}} <span style="background-color: red; margin:2px;border-radius:7px; padding:1px;">VS</span>{{$match->team2}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="next_match">
                <span class="title">next matches</span>
                <div class="scrollable">
                    <ul>
                        @foreach ($next_matches as $match)
                            <li>{{$match->team1}} <span style="background-color: red; margin:2px;border-radius:7px; padding:1px;">VS</span>{{$match->team2}}</li>
                        @endforeach


                    </ul>
                </div>
            </div>

        </div>

@endsection
