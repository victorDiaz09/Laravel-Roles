@extends('layouts.app')

@section('content')
    <section class="content-header">
         <center>
         @can('create_notas')
            <h1>Notas</h1>
            @endcan

            <table id="example" class="display">
    
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nota1</th>
                        <th>Nota2</th>
                        <th>Nota3</th>
                        <th>Nota4</th>
                        <th>parcial</th>
                        <th>promedio</th>
                        <th>Docente</th>
                        <th>Alumno</th>
                        <th>Curso</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($notas as $nota)
                        <tr>
                            <td><a href="{{ url("nota.show", $nota->id ) }}">{{$nota->id}}</a></td>
                            <td>{{$nota->nota1}}</td>
                            <td>{{$nota->nota2}}</td>
                            <td>{{$nota->nota3}}</td>
                            <td>{{$nota->nota4}}</td>
                            <td>{{$nota->parcial}}</td>
                            <td>{{$nota->promedio}}</td>
                            
                            
                            <td>
                              
                                @foreach($profesores as $profesor)

                              

                                @if($profesor->id == $nota->idprofesor)
                                {{$profesor->name}} {{$profesor->apellido}}
                                @endif

                                    
                                @endforeach


                            </td>
                            
                            <td>
                                @foreach($alumnos as $alumno)

                              

                                @if($alumno->id == $nota->idalumno)
                                {{$alumno->name}} {{$alumno->apellido}}
                                @endif

                                    
                                @endforeach


                            </td>
                            <td>

                                @foreach($cursos as $curso)

                              

                                @if($curso->id == $nota->idcursos)
                                {{$curso->name}} 
                                @endif

                                    
                                @endforeach

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </center> 
    </section>
@endsection

 