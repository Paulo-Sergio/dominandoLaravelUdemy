@extends('layout')

@section('conteudo')

<h1>Mensagem</h1>

<p>Enviado por: <strong>{{ $message->name }} - {{ $message->email }}</strong></p>
<p><em>{{ $message->message }}</em></p>

@stop()