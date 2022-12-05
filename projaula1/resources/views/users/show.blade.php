@extends('layouts.app')

@section('title', "Dados do Usuário $user->name")

@section('content')
<h1>Dadoso do usuário {{$user->name}}</h1>
<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
</ul>

<hr>
<form action="{{route('users.destroy', $user->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">DELETAR</button>
</form>
@endsection
