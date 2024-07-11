{{-- resources/views/users/apagar.blade.php --}}
@extends('base')

@section('titulo', 'Apagar | Usuários')

@section('conteudo')
<p>Tem certeza que deseja apagar o <em>{{ $user['name'] }}</em>?</p>

<form action="{{ route('users.apagar', $user['id']) }}" method="post">
@method('delete')
@csrf

<input type="submit" value="Pode apagar sem medo" style="background-color:red; color:white;">
</form>

<a href="{{ route('users') }}">Cancelar</a>
@endsection