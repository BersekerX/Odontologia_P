@extends('layouts.clinic')
@section('contenido')
        @if(isset($dentistum))
                <h2 class="text-center">Editar Dentista</h2>

        @else
                <h2 class="text-center">Agregar Dentista</h2>
        @endif
        <br>

        <div class="row">
                <div class="col-md-12">
                @if(isset($dentistum))
                        <form action="{{ route('dentista.update', $dentistum) }}" method="POST">
                                @method('PATCH')
                @else
                        <form action="{{ route('dentista.store') }}" method="POST">
                @endif
                        @csrf
                                <div class="card-box">
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <h4 class="card-title">Información Personal</h4>
                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="nombre">Nombre:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="nombre" value= "{{ $dentistum->nombre ?? '' }}">
                                                                </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="apellidos">Apellido:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="apellidos" value= "{{ $dentistum->apellidos ?? '' }}">
                                                                </div>
                                                        </div>

                                                        <div class="form-group row">
                                                                <label class="col-md-3 col-form-label" for="genero">Género:</label>
                                                                <div class="col-md-9">
                                                                        <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="genero" value="M" checked="">
                                                                                <label class="form-check-label" for="gender_male">
                                                                                        Masculino
                                                                                </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="genero" value="F">
                                                                                <label class="form-check-label" for="gender_female">
                                                                                        Femenino
                                                                                </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="genero" value="O">
                                                                                <label class="form-check-label" for="gender_female">
                                                                                        Otro
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                        </div>


                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="fechaNacimiento">Fecha de Nacimiento:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="date" class="form-control" name="fechaNacimiento" value= "{{ $dentistum->fechaNacimiento ?? '' }}">
                                                                </div>
                                                        </div>

                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="especialidad">Especialidad:</label>
                                                                <div class="col-lg-9">
                                                                        <select class="select" name="especialidad">
                                                                                <option>Selecciona una Especialidad</option>
                                                                                <option value="Odontólogo">Odontólogo</option>
                                                                                <option value="Ortodoncista">Ortodoncista</option>
                                                                                <option value="Endodoncista">Endodoncista</option>
                                                                                <option value="Odontopediatra">Odontopediatra</option>
                                                                                <option value="Periodoncista">Periodoncista</option>
                                                                                <option value="Prostodoncista">Prostodoncista</option>
                                                                                <option value="Cirujano">Cirujano</option>
                                                                        </select>
                                                                </div>
                                                        </div>

                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="telefono">Teléfono:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="telefono" value= "{{ $dentistum->telefono ?? '' }}">
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Form izquierda -->
                                                
                                                <div class="col-md-6">
                                                        <h4 class="card-title">Domicilio</h4>

                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="noCasa">No. de Casa:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="noCasa" value= "{{ $dentistum->noCasa ?? '' }}">
                                                                </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="calle">Calle:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="calle" value= "{{ $dentistum->calle ?? '' }}">
                                                                </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="colonia">Colonia:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="colonia" value= "{{ $dentistum->colonia ?? '' }}">
                                                                </div>
                                                        </div>

                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="municipio">Municipio:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="municipio" value= "{{ $dentistum->municipio ?? '' }}">
                                                                </div>
                                                        </div>

                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label" for="estado">Estado:</label>
                                                                <div class="col-lg-9">
                                                                        <input type="text" class="form-control" name="estado" value= "{{ $dentistum->estado ?? '' }}">
                                                                </div>
                                                        </div>   
                                                </div>
                                        </div>

                                        <div class="m-t-20 text-center">
                                                <button class="btn btn-success submit-btn">Guardar</button>
                                        </div>

                                </div>
                     
                        </form>
                        <!-- </div> -->
                </div>
        </div>
@endsection
