@extends('master')
@section('login', 'Login')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <h2>Login</h2>

    @if (session()->has('success'))
        {{ session()->get('success')}}
    @endif

    @if (auth()->check())
        Already logged in {{auth()->user()->name}} | <a href="{{route('login.destroy')}}">logout</a>
    @else
    
        @error('error')
            <span>{{$message}}</span>
        @enderror
        
        <form action="{{ route('login.store')}}" method="post">
            @csrf
        
            <input type="text" name="email" placeholder="Digite seu e-mail">
            @error('email')
                <span>{{$message}}</span>
            @enderror <br>
        
            <input type="password" name="password" placeholder="Digite sua Senha">
            @error('password')
                <span>{{$message}}</span>
            @enderror <br>
        
            <button type="submit">Login</button>
        </form>
    @endif
@endsection