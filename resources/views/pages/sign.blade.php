@extends('master')
@section('title', 'Sign up')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <h2>Cadastrar Usuário</h2>
    <form action="{{ route('sign.store') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Insira o nome"><br>
        <input type="email" name="email" id="email" placeholder="Insira o email"><br>
        <input type="email" name="email_confirm" id="email_confirm" placeholder="Confirm o email"><br>
        <input type="password" name="password" id="password" placeholder="Insira a Senha"><br>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="Confirme a senha"><br>
        <button type="submit">Cadastrar</button>
    </form>
@endsection