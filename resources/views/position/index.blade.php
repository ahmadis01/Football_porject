@extends('layouts.app')

@section('content')
    @include('layouts.header')

    @include('layouts.sidebar')
    <span class="table-title">All Positions</span>
    <div class="home-table">
        <table>
            <thead>
                <tr>
                    <th> NO </th>
                    <th>Position</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($positions as $position)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $position->position }}</td>
                        <td>
                            <a href="{{ url('position/edit/' . $position->id) }}" class="btn-edit"><span>Edit</span></a>
                            <a href="{{ url('position/delete/' . $position->id) }}"
                                class="btn-delete"><span>delete</span></a>
                        </td>
                    </tr>
                @endforeach

            <tbody>
        </table>
        {{$positions->links()}}
    </div>

    <form style="height: 250px" class="form" method="POST" action="{{ route('add.position') }}">
        @csrf
        <h2>Add New position</h2>
        <p type="The Position:"><input name="position" placeholder=""></p>
        @error('position')
            <span class="text-erorr">{{ $message }}</span>
        @enderror
        <button type="submit">Add position</button>

    </form>


@endsection
