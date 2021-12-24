@include('welcome');
   <div class="signup-form">
        <form method="POST" action="{{url('/register')}}">
            @csrf
            <label >Sign up 
            <input type="text" name="username" placeholder="username" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <input type="password" name="password_confirmation" placeholder="confirm password" required="">
            <button>Sign up</button>
        </form>
    </div>
