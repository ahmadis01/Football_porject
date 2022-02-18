@extends('layouts.app')

@section('content')
    @include('layouts.header')

    @include('layouts.sidebar')

    <form class="add_form" method="POST" action="{{ url('team/update/' . $team->id) }}">
        @csrf
        <h2>Edit team</h2>

        <p type="rank:">rank<input name="rank" value="{{ $team->rank }}"></p>
        @error('rank')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="name:">name<input name="name" value="{{ $team->name }}"></p>
        @error('name')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="played:">played<input name="played" value="{{ $team->played }}"></p>
        @error('played')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="wins:">wins<input name="wins" value="{{ $team->wins }}"></p>
        @error('wins')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="draws:">draws<input name="draws" value="{{ $team->draws }}"></p>
        @error('draws')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="losses:">losses<input name="losses" value="{{ $team->losses }}"></p>
        @error('losses')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="points:">points<input name="points" value="{{ $team->points }}"></p>
        @error('pointes')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="coach:">coach<input name="coach" value="{{ $team->coach }}"></p>
        @error('coach')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <button type="submit">Edit team</button>

    </form>


@endsection
