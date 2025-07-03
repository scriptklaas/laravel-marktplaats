@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div>
    <h1>Login</h1>
</div>
<div>
    <form method="POST">
        @csrf
        <label for="email">Email address:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
        <br>
        <button id="login" name="login">Log in</button>
    </form>
</div>
<div>
    <p>Don't have an account? <a href="{{ route('createuser') }}">Create New Account</a></p>
<div>
@endsection