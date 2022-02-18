@extends('layouts.app')

@section('content')

    <div class="welcome_container">
        <div class="welcome_main">
            <div class="welcome_title">Welcome to Dashboard</div>
            <div class="welcome_about">
                <p>About the dashboard</p>
                <div>
                    this dashboard is modern dashboard that can help you to control your pages and look up about your
                    information, and you can add and update and delete what you want
                </div>
            </div>
            @if (Route::is('register'))
                @include('auth.register')
            @else
                @include('auth.login')
            @endif

        </div>
    </div>

@endsection
