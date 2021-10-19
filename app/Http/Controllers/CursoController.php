<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::all();

        return view('curso.index', compact('cursos'));
    }

    public function create(){
        return view('curso.create');
    }

    public function store(StoreCurso $request,Curso $curso){

        // este es una forma de validar el formulario
        /*
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);*/
        
        /*$curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();*/

        //esta linea es para realizar una asignacion masiva
        //$curso = Curso::create($request->all());
        $curso->create($request->all());
        return redirect()->route('curso.show', $curso);
    }

    public function show(Curso $curso){

      // $curso = Curso::find($curso);

        return view('curso.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('curso.edit',compact('curso'));
    }

    public function update(Request $request,Curso $curso){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        
        /*$curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();*/

        $curso->update($request->all());

        return redirect()->route('curso.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('curso.index');   
    }
}
