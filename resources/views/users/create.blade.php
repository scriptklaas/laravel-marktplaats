@extends('layouts.app')

@section('title', 'Create account')

@section('content')
<div>
    <h1>Create a new account</h1>
</div>
<div>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">E-mail address:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button id="create" name="create">Create account</button>
    </form>
</div>
<div>
    <p>Already have an account? <a href="{{ route('login') }}">Click here to login</a></p>
</div>
@endsection