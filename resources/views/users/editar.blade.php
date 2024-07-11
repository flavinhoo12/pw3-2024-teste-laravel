{{-- resources/views/users/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Editar | Usuários')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h2>Deu Ruim</h2>
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
</div>
@endif

<form method="post" action="{{ route('editar.teste', $user->id) }}">
    @csrf
    @method('put')

    <input type="text" name="name" placeholder="Nome" value="{{ old('name', $user->name) }}">
    <br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}">
    <br>
    <input type="text" name="username" placeholder="Nome de usuário" value="{{ old('username', $user->username) }}">
    <br>
    <input type="password" name="password" placeholder="Senha" value="{{ old('password', $user->password) }}">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection
