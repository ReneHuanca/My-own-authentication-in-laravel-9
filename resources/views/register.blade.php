@extends('layouts.app')

@section('title', 'register')

@section('content')
<h3>Register</h3>
<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"/> <br>
    @error('name') {{ $message }} @enderror <br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" /> <br>
    @error('email') {{ $message }} @enderror <br>
    <input type="password" name="password" placeholder="Password"/> <br>
    @error('password') {{ $message }} @enderror <br>
    <input type="password" name="password_confirmation" placeholder="Password confirmation"> <br>
    @error('password_confirmation') {{ $message }} @enderror <br>
    <input type="submit" value="Save">
</form>
@endsection