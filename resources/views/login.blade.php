@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h1>login</h1>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" require autofocus><br>
    @error('email') {{ $message }} @enderror
    <input type="password" name="password" placeholder="Password" require><br>
    @error('password') {{ $message }} @enderror
    <label>
        <input type="checkbox" name="remember"> Remember me <br>
    </label>
    <button type="submit">Login</button>
</form>
@endsection