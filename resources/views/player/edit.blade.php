@extends('layouts.app')

@section('content')
    @include('layouts.header')

    @include('layouts.sidebar')

    <form class="add_form" method="POST" action="{{url('player/update/'.$player->id)}}">
        @csrf
        <h2>Edit player</h2>
        <p type="name:"><input name="name" value="{{$player->name}}"></p>
        @error('name')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="number:">number:<input name="number" placeholder=""></p>
        @error('number')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <div class="input-field col s12">
            <p type="Position:" display="inline"></p>
            <select name="position">
                @foreach ($positions as $position)
                    <option value="{{$position->id}}">{{$position->position}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Edit player</button>

    </form>


@endsection
