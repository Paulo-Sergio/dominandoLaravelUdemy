@extends('layout')

@section('conteudo')

<h1>Usuários</h1>

<table class="table">
    <thead>
	<tr>
	    <th>ID</th>
	    <th>Nome</th>
	    <th>E-mail</th>
	    <th>Role</th>
	    <th>Ações</th>
	</tr>
    </thead>
    <tbody>
	@foreach ($users as $user)
	<tr>
	    <td>{{ $user->id }}</td>
	    <td>
		<a href="{{ route('users.show', $user->id) }}">
		    {{ $user->name }}
		</a>
	    </td>
	    <td>{{ $user->email }}</td>
	    <td>
		@foreach ($user->roles as $role)
		    {{ $role->display_name }}
		@endforeach
	    </td>
	    <td>
		<a class="btn btn-info btn-xs" href="{{route('users.edit', $user->id)}}">Editar</a>
		<form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display: inline">
		    {!! csrf_field() !!}
		    {!! method_field('DELETE') !!}
		    <button type="submit" class="btn btn-danger btn-xs">Excluir</button>
		</form>
	    </td>
	</tr>
	@endforeach
    </tbody>
</table>

@stop()
