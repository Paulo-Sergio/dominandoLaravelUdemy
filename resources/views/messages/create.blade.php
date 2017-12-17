@extends('layout')

@section('conteudo')
<h1>Contatos</h1>

<h2>Escreva-me</h2>

@if( session()->has('info') )
<h3> {{ session('info') }} </h3>
@else
<form method="POST" action="{{ route('mensagens.store') }}">
    {!! csrf_field() !!}
    <label>Nome</label>
    <input type="text" name="nome" /> {{ $errors->first('nome') }}<br>

    <label>E-mail</label>
    <input type="text" name="email" /> {{ $errors->first('email') }}<br>

    <label>Mensagem</label>
    <textarea name="mensagem"></textarea>{{ $errors->first('mensagem') }}<br>

    <input type="submit" value="Enviar">
</form>
@endif
<hr>
@stop()
