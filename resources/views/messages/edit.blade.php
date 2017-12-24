@extends('layout')

@section('conteudo')

<h1>Editar Mensagem</h1>

<form method="POST" action="{{ route('messages.update', $message->id) }}">
    <!-- Envia via verbo PUT -->
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <label>Nome</label>
    <input type="text" name="name" value="{{$message->name}}" class="form-control" /> {{ $errors->first('name') }}<br>

    <label>E-mail</label>
    <input type="text" name="email" value="{{$message->email}}" class="form-control"/> {{ $errors->first('email') }}<br>

    <label>Mensagem</label>
    <textarea name="message" class="form-control">{{$message->message}}</textarea>{{ $errors->first('message') }}<br>

    <input type="submit" value="Enviar" class="btn btn-primary btn-lg">
</form>
<hr>

@stop()
