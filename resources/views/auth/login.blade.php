@extends('layout')

@section('conteudo')

<h1>Login</h1>

<form method="POST" action="login">
  {!! csrf_field() !!}
  <input type="email" name="email" placeholder="E-mail">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" value="Entrar"/>
</form>

<hr>

@stop