@extends('layout')
@section('titulo')
Equipas do torneio
@endsection
@section('header')
Equipas
@endsection
@section('conteudo')

@if(isset($equipas))
   <h1>Lista de Equipas</h1>
   @foreach($equipas as $equipa)
      <h2>{{$equipa}}</h2>
   @endforeach
   <p>Está Tudo</p>
@else
   <h1>Só uma equipa</h1>
   {{$equipa}}
@endif
@endsection