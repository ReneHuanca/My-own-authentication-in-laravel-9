<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    @include('partials.nav')
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
        <input type="text" name="password" placeholder="Password" require><br>
        @error('password') {{ $message }} @enderror
        <label>
            <input type="checkbox" name="remember"> Remember me <br>
        </label>
        <button type="submit">Login</button>
    </form>
</body>
</html>