@extends('layouts.app')

@section('title', 'Create account')

@section('content')
<div>
    <h1>Create a new account</h1>
</div>
<div>
    <form method="POST">
        @csrf
        <label for="email">E-mail address:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
        <br>
        <button id="create" name="create">Create account</button>
    </form>
</div>
<div>
    <p>Already have an account? <a href="{{ route('login') }}">Click here to login</a></p>
</div>
@endsection