@extends('layout')

@section('conteudo')

<h1>Login</h1>

<form class="form-inline" method="POST" action="login">
  {!! csrf_field() !!}
  <input type="email" name="email" placeholder="E-mail" class="form-control">
  <input type="password" name="password" placeholder="Password" class="form-control">
  <input type="submit" value="Entrar" class="btn btn-primary"/>
</form>

<hr>

@stop