@extends('master')
@section('title', 'Atualizar nome')

@section('content')
    @if (auth()->check())
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('login.destroy')}}">Sair</a>
    @endif
    h2{Painel de Controle}
@endsection