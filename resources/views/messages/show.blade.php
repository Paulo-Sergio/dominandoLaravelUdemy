@extends('layout')

@section('conteudo')

<h1>Mensagem</h1>

<p>Enviado por: {{ $message->nome }} - {{ $message->email }}</p>
<p>{{ $message->mensagem }}</p>

@stop()