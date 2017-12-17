@extends('layout')

@section('conteudo')

<h1>Todas as mensagens</h1>

<table width="100%" border="1">
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
                <a href="{{route('mensagens.edit', $message->id)}}">Editar</a>
                <form method="POST" action="{{ route('mensagens.destroy', $message->id) }}" style="display: inline">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop()
