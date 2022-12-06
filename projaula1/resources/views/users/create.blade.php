@extends('layouts.app')

@section('title', "Criar Usuário")

@section('content')
    <h1>Criar usuário</h1>
    @include('includes.validation-form')

    <form action="{{route('users.store')}}" method="post">
        @csrf
        @include('users._partials.form')
    </form>

@endsection
