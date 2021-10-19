@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>bienvenido a la pagina de los cursos</h1>

    <a href="{{Route('curso.create')}}">Crear un curso</a>

    <ul>
        @foreach ($cursos as $curso)
            <li>
               <a href="{{Route('curso.show',$curso)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection

