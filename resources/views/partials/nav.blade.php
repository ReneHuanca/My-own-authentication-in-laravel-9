@if(session('status'))
    {{ session('status') }} <br>
@endif
<a href="/">Home</a>
@auth
<a href="/dashboard">Dashboard</a>
<form style="display: inline" action="/logout" method="POST">
    @csrf
    <a href="#" onclick="this.closest('form').submit()">
        Logout
    </a>
</form>
@else
<a href="/login">Login</a>
@endauth