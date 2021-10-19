@extends('layouts.plantilla')

@section('title', 'Crear Cursos')

@section('content')
    <h1>aqui puedes crear tus cursos</h1>
    <br>

    <form action="{{Route('curso.store')}}" method="POST">

        @csrf

        <label>
            nombre curso:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label >
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label >
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        <br>
        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>

@endsection
