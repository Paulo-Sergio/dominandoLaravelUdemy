@extends('layout')

@section('conteudo')

<h1>Editar Usuário</h1>

@if( session()->has('info') )
    <div class="alert alert-success">
	{{ session('info') }}
    </div>
@endif

<form method="POST" action="{{ route('users.update', $user->id) }}">
    <!-- Envia via verbo PUT -->
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <label>Nome</label>
    <input type="text" name="name" value="{{$user->name}}" class="form-control" /> {{ $errors->first('name') }}<br>

    <label>E-mail</label>
    <input type="text" name="email" value="{{$user->email}}" class="form-control"/> {{ $errors->first('email') }}<br>

    <input type="submit" value="Enviar" class="btn btn-primary btn-lg">
</form>

@stop()
