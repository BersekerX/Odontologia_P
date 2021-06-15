@extends('layouts.clinic')
@section('contenido')
        @if(isset($paciente))
                <h2 class="text-center">Editar Paciente</h2>

        @else
                <h2 class="text-center">Agregar Paciente</h2>
        @endif
        <br>
        <div class="row">
                <div class="col-lg-8 offset-lg-2">    
                @if(isset($paciente))
                        <form action="{{ route('paciente.update', $paciente) }}" method="POST">
                                @method('PATCH')
                @else
                        <form action="{{ route('paciente.store') }}" method="POST">
                @endif
                        @csrf
                                <!-- ?? '' Para tener un input vacio -->
                                <div class="card-box">     
                                <div class="row">
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label for="nombre">Nombre<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" name="nombre" value= "{{ $paciente->nombre ?? '' }}">
                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label for="apellidos">Apellido</label>
                                                        <input class="form-control" type="text" name="apellidos" value= "{{ $paciente->apellidos ?? '' }}">
                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                                                        <input type="date" class="form-control" name="fechaNacimiento" value= "{{ $paciente->fechaNacimiento ?? '' }}">
                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="form-group gender-select">
                                                        <label class="gen-label" for="genero">Género</label>
                                                        <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                        <input type="radio" value="M" name="genero"  class="form-check-input">Masculino
                                                                </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                        <input type="radio" value="F" name="genero"  class="form-check-input">Femenino
                                                                </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                        <input type="radio" value="O" name="genero"  class="form-check-input">Otro
                                                                </label>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label for="telefono">Telefono </label>
                                                        <input class="form-control" type="text" name="telefono" value= "{{ $paciente->telefono ?? '' }}">
                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label for="email">Email </label>
                                                        <input class="form-control" type="text" name="email" value= "{{ $paciente->email ?? '' }}">
                                                </div>
                                        </div>    
                                </div>
                                </div>

                                <div class="m-t-20 text-center">
                                        <button class="btn btn-success submit-btn">Guardar</button>
                                </div>
                        </form>
                </div>
        </div>                              
@endsection
