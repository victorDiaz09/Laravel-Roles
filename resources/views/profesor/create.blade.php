@extends('layouts.app')
@section('content')
    <section class="content-header">
        <center>
            <h1 class="text-primary p-5">Crear Nuevo Docente</h1>
            <form method="POST" action="{{ url('profesor/crear') }}">
                @csrf
                
                <div class="form-floating mb-3">
                <label for="floatingInput" class="col-sm-2 col-form-label">Name: </label>
                <div class="form-group col-sm-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Ejemplo andres" value="{{ old('name') }}">
            
                @if($errors->has('name'))
                    <p>{{ $errors->first('name') }}</p>
                @endif
            </div>
            </div>
            
            <div class="form-floating mb-3">
                <label for="floatingInput" class="col-sm-2 col-form-label">Email:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="email" class="form-control" id="email" placeholder="Ejemplo@gmail.com" value="{{ old('email') }}">
                
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            
            </div>
            </div>
            
            <div class="form-floating mb-3">
                <label for="floatingInput" class="col-sm-2 col-form-label">Clave:</label>
                <div class="form-group col-sm-6">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="mayor a 5" value="{{ old('password') }}">
            
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            
            </div>
            </div>

            <div class="form-floating mb-3">
                <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i>Crear Docente</button>
        </div>
        </div>
            
            </form>
        </center>
    </section>
@endsection

 