@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')
Bem-Vindo
@endsection
@section('conteudo')
<form method="post" action="{{route('processar.form')}}">
    @csrf
<label for="nome">Nome</label>
<input type="text" name="nome">
    <label for="morada">Morada</label>
    <input type="text" name="Morada">
<label for="automovel">Automovel</label>
    <select name="automovel">
        <option value="volvo">Volvo</option>
        <option value="bmw">Bmw</option>
<option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
    </select>
    <button type="submit">enviar</button>
</form>
@endsection