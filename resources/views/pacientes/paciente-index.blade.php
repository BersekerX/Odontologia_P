@extends('layouts.clinic')
@section('contenido')
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Listado de Pacientes</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('paciente.create')}}" class="btn btn-info float-right btn-rounded"><i class="fa fa-plus"></i> Agregar Paciente</a>
        </div>
    </div>

    <div class="row filter-row">
        <div class="col-sm-6 col-md-9">
            <div class="form-group form-focus">
                <label class="focus-label">Nombre del Paciente</label>
                <input type="text" class="form-control floating">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block"> Buscar </a>
        </div>
    </div>

    


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped ">
                <!-- custom-table mb-0 datatable -->
                    <thead>
                        <tr>

                            <th >Nombre</th>
                            <th >Apellidos</th>
                            <th >Fecha de Nacimiento</th>
                            <th >Género</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pacientes as $paciente)
                        <tr>
                                <td>
                                    <img width="20" height="20" src=" {{asset('css/clinic/img/user.jpg') }}" class="rounded-circle" alt=""> <a href="{{ route('paciente.show', $paciente->id)}}">{{ $paciente->nombre}}</a>
                                </td>
                                <td>{{ $paciente->apellidos}}</td>
                                <td>{{ $paciente->fechaNacimiento}}</td>
                                <td>{{ $paciente->genero}}</td>
                                <td>{{ $paciente->telefono}}</td>
                                <td>{{ $paciente->email}}</td>

                                <!-- Action -->
                                <td>
                                    <a href="{{ route('paciente.edit', $paciente)}}"><i class="fa fa-pencil m-r-10"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i></a>
                                    

                                    <div id="delete_employee" class="modal fade delete-modal" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <img src="{{asset('css/clinic/img/sent.png') }}" alt="" width="50" height="46">
                                                    <h3>¿Estás seguro que deseas borrar a este paciente?</h3>
                                                    <div class="m-t-20"> 

                                                        <form action="{{ route('paciente.destroy', $paciente) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <!-- <button class="btn btn-danger submit-btn">Eliminar</button> -->
                                                            <a href="#" class="btn btn-white" data-dismiss="modal">Cerrar</a>

                                                            <!-- <a href="#" class="btn btn-danger" data-dismiss="modal">Cerrar</a> -->
                                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                                            <!-- <input type="submit" class="btn btn-danger btn-lg" value="Borrar"> -->
                                                    
                                                        </form>

                                                        <!-- <button type="submit" class="btn btn-danger">Borrar</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                        </tr>
                        @endforeach
                    </tbody>                    

                </table>
            </div>
        </div>
    </div>


@endsection
