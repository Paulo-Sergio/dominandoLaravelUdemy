@extends('layout')

@section('conteudo')

<h1>{{ $user->name }}</h1>

<table class="table">
    <tr>
	<th>Nome:</th>
	<td>{{ $user->name }}</td>
    </tr>
    <tr>
	<th>E-mail:</th>
	<td>{{ $user->email }}</td>
    </tr>
    <tr>
	<th>Roles:</th>
	<td>
	    @foreach($user->roles as $role)
		{{ $role->display_name }}
	    @endforeach
	</td>
    </tr>
</table>

<!-- 1º parametro habilidade, 2º o modelo -->
@can('edit', $user)
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Editar</a>
@endcan

@can('destroy', $user)
    <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display: inline">
	{!! csrf_field() !!}
	{!! method_field('DELETE') !!}
	<button type="submit" class="btn btn-danger">Excluir</button>
    </form>
@endcan

@stop()