@extends('layout')

@section('conteudo')

<h1>Todas as mensagens</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Mensagem</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>
                <a href="{{ route('mensagens.show', $message->id) }}">
                    {{ $message->nome }}
                </a>
            </td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->mensagem }}</td>
            <td>
                <a class="btn btn-info btn-xs" href="{{route('mensagens.edit', $message->id)}}">Editar</a>
                <form method="POST" action="{{ route('mensagens.destroy', $message->id) }}" style="display: inline">
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
