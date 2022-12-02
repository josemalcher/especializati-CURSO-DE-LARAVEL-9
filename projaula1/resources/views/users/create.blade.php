@extends('layouts.app')

@section('title', "Criar Usuário")

@section('content')
<h1>Criar usuário</h1>

@if($errors->any)

    <ul>
        @foreach($errors->all() as $error)
            <li class="error">{{$error}}</li>
        @endforeach
    </ul>

@endif

    <form action="{{route('users.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{old('name')}}">
        <input type="email" name="email" placeholder="E-Mail" value="{{old('email')}}">
        <input type="password" name="password" placeholder="Senha" >
        <button type="submit">Enviar</button>
    </form>

@endsection
