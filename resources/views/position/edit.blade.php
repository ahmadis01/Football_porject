@extends('layouts.app')

@section('content')
    @include('layouts.header')

    @include('layouts.sidebar')

    <form class="add_form" method="POST" action="{{ url('position/update/'.$position->id) }}">
        @csrf
        <h2>Edit position</h2>
        @error('position')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="The Position:"><input name="position" value="{{$position->position}}"></p>
        <button type="submit">Edit position</button>

    </form>


@endsection
