@extends('layouts.clinic')
@section('contenido')
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Listado de Dentistas</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('dentista.create')}}" class="btn btn-info float-right btn-rounded"><i class="fa fa-plus"></i> Agregar Dentista</a>
        </div>
    </div>

    <div class="row filter-row">
        <div class="col-sm-6 col-md-9">
            <div class="form-group form-focus">
                <label class="focus-label">Nombre del Dentista</label>
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
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th style="min-width:170px;">Nombre</th>
                            <th style="min-width:130px;">Apellidos</th>
                            <th >Género</th>
                            <th >Fecha de Nacimiento</th>
                            <th>Especialidad</th>
                            <th>Teléfono</th>
                            <th style="min-width: 80px;">No. Casa</th>
                            <th>Calle</th>
                            <th>Colonia</th>
                            <th>Municipio</th>
                            <th>Estado</th>
                            <th class="text-right">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dentistas as $dentista)
                        <tr>
                                <td>
                                    <img width="20" height="20" src=" {{asset('css/clinic/img/user.jpg') }}" class="rounded-circle" alt=""> <h2><a href="{{ route('dentista.show', $dentista->id)}}">{{ $dentista->nombre}}</a></h2>
                                </td>
                                <td>{{ $dentista->apellidos}}</td>
                                <td>{{ $dentista->genero}}</td>
                                <td>{{ $dentista->fechaNacimiento}}</td>
                                <td>
                                    <span class="custom-badge status-blue">{{ $dentista->especialidad}}</span>
                                </td>
                                <td>{{ $dentista->telefono}}</td>
                                <td>{{ $dentista->noCasa}}</td>
                                <td>{{ $dentista->calle}}</td>
                                <td>{{ $dentista->colonia}}</td>
                                <td>{{ $dentista->municipio}}</td>
                                <td>{{ $dentista->estado}}</td>


                                <!-- Action -->
                                <td>
                                    <a href="{{ route('dentista.edit', $dentista)}}"><i class="fa fa-pencil m-r-10"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i></a>

                                </td>
                        </tr>
                        @endforeach
                    </tbody>                    

                </table>
            </div>
        </div>
    </div>

    <div id="delete_employee" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="{{asset('css/clinic/img/sent.png') }}" alt="" width="50" height="46">
                    <h3>¿Estás seguro que deseas elimiar a este paciente?</h3>
                    <div class="m-t-20"> 
                        <a href="#" class="btn btn-white" data-dismiss="modal">Cerrar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
