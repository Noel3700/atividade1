@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')
Bem-Vindo
@endsection
@section('conteudo')
<h2>Bem-Vindo</h2>
<h1>Esta é a minha primeira web APP em Laravel</h1>
<p>Para que conste...estou a usar um controller</p>

<a href="{{route('equipas.listarequipas')}}">ver equipas</a>

<img src="{{asset('imagens/beta.jpg
@endsection