@extends('layout')

@section('conteudo')

<h1>Usuário</h1>

<p>Nome: {{ $user->name }}</p>
<p>E-mail: {{ $user->email }}</p>
<p>Role: {{ $user->role }}</p>

@stop()