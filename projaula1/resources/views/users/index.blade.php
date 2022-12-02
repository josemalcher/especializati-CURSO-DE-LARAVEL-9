@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1>Users <a href="{{route('users.create')}}">[+]</a></h1>
<hr>

<ul>
    @foreach($users as $user)
        <li>{{$user->name}} - {{$user->email}} | <a href="{{route('users.show', $user->id)}}">Detalhes</a></li>

    @endforeach
</ul>
@endsection
