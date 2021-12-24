<div class="header_nav">
    <span class="title">Matches App</span>
    <form action="{{ route('logout') }} " method="POST">
        @csrf
        <input type="submit" value="logout">
    </form>

</div>
