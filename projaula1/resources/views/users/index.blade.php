@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>Users <a href="{{route('users.create')}}">[+]</a></h1>
    <hr>
    <form action="{{route('users.index')}}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>
    <hr>
    <ul>
        @foreach($users as $user)
            <li>{{$user->name}} - {{$user->email}} |
                <a href="{{route('users.show', $user->id)}}">Detalhes</a> |
                <a href="{{route('users.edit', $user->id)}}">Editar</a></li>

        @endforeach
    </ul>
@endsection
