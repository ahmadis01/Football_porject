@include('welcome');
<div class="login-form">
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <label for="chk" aria-hidden="true">Login</label></label>
        <input type="username" name="username" placeholder="username">
        @error('username')
            <span class="text-error" style="font-size: 15px">{{ $message }}</span>
        @enderror
        <input type="password" name="password" placeholder="Password">
        @error('password')
            <span class="text-error" style="font-size: 15px">{{ $message }}</span>
        @enderror
        @if(session('error'))
            <span class="text-error" style="font-size: 18px">{{ session('error') }}</span>
        @endif
        <button>Login</button>
    </form>
</div>
