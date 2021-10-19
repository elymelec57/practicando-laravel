@extends('layouts.plantilla')

@section('title', 'Cursos ' . $curso->name)

@section('content')

<a href="{{Route('curso.index')}}">Volver a cursos</a>
<br>
<a href="{{Route('curso.edit',$curso)}}">Editar curso</a>
<br>

<h1>bienvenido al curso: {{$curso->name}} </h1>

<p><strong>Categoria: </strong>{{$curso->categoria}}</p>

<form action="{{Route('curso.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar curso</button>
</form>

@endsection
