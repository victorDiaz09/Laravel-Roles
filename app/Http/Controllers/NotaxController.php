<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
use App\Profesor;
use App\Alumno;
use App\Cursos;

class NotaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Notas::all();
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        $cursos = Cursos::all();
        return view("notas.index", compact("notas", "profesores", "alumnos", 'cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Notas::create($datos);
        
       


       return redirect()->route('notas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notas = Notas::find($id);
        return view("nota.show", compact('notas'));
    }


}
