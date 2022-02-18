<div class="login_form">
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <label class="login_label" for="chk" aria-hidden="true">Login</label>
        <input type="username" name="username" placeholder="username">
        @error('username')
            <span class="text-error">{{ $message }}</span>
        @enderror
        <input type="password" name="password" placeholder="Password">
        @error('password')
            <span class="text-error">{{ $message }}</span>
        @enderror
        @if (session('error'))
            <span class="text-error">{{ session('error') }}</span>
        @endif
    </br>
        <a href="{{route('register')}}">Create Account</a>
        <button>Login</button>
    </form>
</div>
