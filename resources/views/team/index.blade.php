@extends('layouts.app')

@section('content')
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="matches_container">
        <span class="table_title">All Teams</span>
        <div class="table_container">
            <table class="table">
                <thead>
                    <tr>
                        <th> Rank </th>
                        <th>name</th>
                        <th>pl</th>
                        <th>wins</th>
                        <th>losses</th>
                        <th>draws</th>
                        <th>points</th>
                        <th>coach</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->rank}}</td>
                            <td> {{ $team->name }}</td>
                            <td>{{ $team->played }}</td>
                            <td>{{ $team->wins }}</td>
                            <td>{{ $team->losses }}</td>
                            <td>{{ $team->draws }}</td>
                            <td>{{ $team->points }}</td>
                            <td>{{ $team->coach }}</td>
                            <td>
                                <a href="{{ url('team/edit/' . $team->id) }}" class="btn-edit">Edit</a>
                                <a href="{{ url('team/delete/' . $team->id) }}" class="btn-delete">delete</a>
                            </td>
                        </tr>
                    @endforeach

                <tbody>
            </table>
            {{ $teams->links() }}
        </div>
        <form class="add_form" method="POST" action="{{ route('add.team') }}">
            @csrf
            <h2>Add team</h2>
            <p>name:<input name="name" placeholder=""></p>
            @error('team1')
                <span class="text-error">{{ $message }}</span>
            @enderror
            <p>the coach:<input name="coach" placeholder=""></p>
            @error('team2')
                <span class="text-error">{{ $message }}</span>
            @enderror
            <button type="submit">Add team</button>

        </form>
    </div>
@endsection
