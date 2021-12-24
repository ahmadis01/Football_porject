@extends('layouts.app')

@section('content')
    @include('layouts.header')
    @include('layouts.sidebar')
    <span class="table-title">All Users:</span>
    <div class="home-table">
        <table>
            <thead>
                <tr>
                    <th> NO </th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $user->username }}</td>
                    </tr>
                @endforeach

            <tbody>

        </table>
        {{$users->links()}}
    </div>
@endsection
