{{-- resources/views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Usuários')

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

<form method="post" action="{{ route('users.gravar') }}">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <br>
    <input type="text" name="username" placeholder="Nome de usuário" value="{{ old('username') }}">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection
