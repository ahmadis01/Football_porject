@extends('layouts.app')

@section('content')
    @include('layouts.header')

    @include('layouts.sidebar')
    <span class="table-title">All Matches</span>
    <div class="home-table">
        <table>
            <thead>
                <tr>
                    <th> NO </th>
                    <th>Team1</th>
                    <th>Team2</th>
                    <th>date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($matches as $match)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $match->team1 }}</td>
                        <td>{{ $match->team2 }}</td>
                        <td>{{ $match->date }}</td>
                        <td>
                            <a href="{{ url('match/ditails/' . $match->id) }}" class="btn-details"><span>Ditails</span></a>
                            <a href="{{ url('match/edit/' . $match->id) }}" class="btn-edit"><span>Edit</span></a>
                            <a href="{{ url('match/delete/' . $match->id) }}" class="btn-delete"><span>delete</span></a>
                        </td>
                    </tr>
                @endforeach

            <tbody>
        </table>
        {{$matches->links()}}
    </div>

    <form class="form" method="POST" action="{{ route('add.match') }}">
        @csrf
        <h2>Add Match</h2>
        <p type="the first team"><input name="team1" placeholder=""></p>
        @error('team1')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="the second team:"><input name="team2" placeholder=""></p>
        @error('team2')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="date:"><input name="date" type="date"></p>
        @error('date')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <button type="submit">Add Match</button>

    </form>


@endsection
