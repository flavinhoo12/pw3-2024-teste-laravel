{{-- resources/views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Editar | Animais para adoção')

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

<form method="post" action="{{ route('editar.teste', $animal->id) }}">
    @csrf
    @method('put')

    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome', $animal->nome) }}">
    <br>
    <input type="number" name="idade" placeholder="Idade" value="{{ old('idade', $animal->idade) }}">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection
