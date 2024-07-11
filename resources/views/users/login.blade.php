{{-- resources/views/users/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')

<form method="post" action="{{ route('login') }}">
@csrf
    <input type="text" name="username" placeholder="Nome de Usuário">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="button" value="Entrar">
</form>

@endsection