@extends('layouts.app')

@section('content')
    @include('layouts.header')

    @include('layouts.sidebar')

    <form class="add_form" method="POST" action="{{url('match/update/'.$match->id)}}">
        @csrf
        <h2>Edit Match</h2>
        <p type="the first team"><input name="team1" value="{{$match->team1}}"></p>
        @error('team1')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="the second team:"><input name="team2" value="{{$match->team2}}"></p>
        @error('team2')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="date:"><input name="date" type="date"value="{{$match->date}}"></p>
        @error('date')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="time:">the time:<input name="time" type="time" value="{{$match->time}}"></p>

        <button type="submit">Edit Match</button>

    </form>


@endsection
