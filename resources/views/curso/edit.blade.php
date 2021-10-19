@extends('layouts.plantilla')

@section('title', 'Editar Cursos')

@section('content')
    <h1>Editar el curso</h1> 
    <br>

    <form action="{{Route('curso.update',$curso)}}" method="POST">

        @csrf
        @method('put')
        <label >
            nombre curso:
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>

        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <label >
            Descripcion:
            <br>
            <textarea name="descripcion" rows="10">
                {{old('descripcion',$curso->descripcion)}}
            </textarea>
        </label>

        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <label >
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>

        @error('categoria')
            <small>*{{$message}}</small>
        @enderror

        <button type="submit">Actualizar curso</button>
    </form>

@endsection
