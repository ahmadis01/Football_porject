@extends('layouts.app')

@section('content')
    @include('layouts.header')

    @include('layouts.sidebar')
    <div class="matches_container">
    <span class="table_title">All Players</span>
    <div class="table_container">
        <table class="table">
            <thead>
                <tr>
                    <th> NO </th>
                    <th>Name</th>
                    <th>number</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($players as $player)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $player->name }}</td>
                        <td> {{ $player->number }}</td>
                        <td>{{ $player->position->position }}</td>
                        <td>
                            <a href="{{url('player/edit/'.$player->id)}}" class="btn-edit"><span>Edit</span></a>
                            <a href= "{{url('player/delete/'.$player->id)}}"class="btn-delete"><span>delete</span></a>
                        </td>
                    </tr>
                @endforeach

            <tbody>
        </table>
        {{$players->links()}}
    </div>

    <form class="add_form" method="POST" action="{{route('add.player')}}">
        @csrf
        <h2>Add player</h2>
        <p type="name:">name:<input name="name" placeholder=""></p>
        @error('name')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <p type="number:">number:<input name="number" placeholder=""></p>
        @error('number')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <div class="input-field col s12">
            <p type="Position:" display="inline">The Position:</p>
            <select name="position">
                @foreach ($positions as $position)
                    <option value="{{$position->id}}">{{$position->position}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Add player</button>

    </form>
</div>

@endsection
