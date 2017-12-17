@extends('layout')

@section('conteudo')

<h1>Editar Mensagem</h1>

<form method="POST" action="{{ route('messages.update', $message->id) }}">
    <!-- Envia via verbo PUT -->
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <label>Nome</label>
    <input type="text" name="nome" value="{{$message->nome}}" /> {{ $errors->first('nome') }}<br>

    <label>E-mail</label>
    <input type="text" name="email" value="{{$message->email}}" /> {{ $errors->first('email') }}<br>

    <label>Mensagem</label>
    <textarea name="mensagem">{{$message->mensagem}}</textarea>{{ $errors->first('mensagem') }}<br>

    <input type="submit" value="Enviar">
</form>
<hr>

@stop()
