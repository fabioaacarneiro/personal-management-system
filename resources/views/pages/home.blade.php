@extends('master')
@section('title', 'Home')

@section('content')
    <div class="nav">
        @if (auth()->check())
            Wellcome {{auth()->user()->name}} |
            <a href="{{route('login.destroy')}}">Sair</a>
            
        @else
            <a href="{{ route('login.index') }}">Logar</a>
            <a href="{{route('sign.index')}}">Cadastrar</a>
        @endif
    </div>
    <h2>Home</h2>
@endsection