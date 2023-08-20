@extends('master')
@section('title', 'Home')

@section('content')
    <div class="nav">
        <a href="{{ route('login.index') }}">Login</a>
        <a href="{{route('sign.index')}}">Cadastrar</a>
    </div>
    <h2>Home</h2>
@endsection