@extends('layouts.app')

@section('title', "Criar Usuário")

@section('content')
<h1>Criar usuário</h1>

    <form action="{{route('users.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="email" name="email" placeholder="E-Mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>

@endsection
