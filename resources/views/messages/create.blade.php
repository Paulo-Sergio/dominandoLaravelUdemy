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
    <input type="text" name="nome" class="form-control" /> {{ $errors->first('nome') }}<br>

    <label>E-mail</label>
    <input type="text" name="email" class="form-control"/> {{ $errors->first('email') }}<br>

    <label>Mensagem</label>
    <textarea name="mensagem" class="form-control"></textarea>{{ $errors->first('mensagem') }}<br>

    <input type="submit" value="Enviar" class="btn btn-primary btn-lg">
</form>
@endif
<hr>
@stop()
