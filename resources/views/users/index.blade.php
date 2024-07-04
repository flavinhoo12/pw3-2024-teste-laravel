{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a href="{{ route('users.cadastrar') }}">Cadastrar Usuário</a>
</p>
<p>Veja nossa lista de usuários:</p>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Nome de usuário</th>
        <th>Ações</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['email'] }}</td>
        <td>{{ $user['username'] }}</td>
        <td>
            <a href="{{ route('users.editar', $user['id']) }}">Editar</a>
            |
            <a href="{{ route('users.apagar', $user['id']) }}">Apagar</a>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection