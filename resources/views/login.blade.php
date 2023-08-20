@extends('master')
@section('login', 'Login')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <h2>Login</h2>
    <form action="{{ route('login.store')}}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Digite seu e-mail">
        <input type="password" name="password" placeholder="Digite sua Senha">
        <button type="submit">Login</button>
    </form>
@endsection