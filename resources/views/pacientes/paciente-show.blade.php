@extends('layouts.clinic')
@section('contenido')

    <div class="row">
        <div class="col-sm-7 col-6">
            <!-- <h4 class="page-title">My Profile</h4> -->
            <h2>Detalles del Paciente</h2>
        </div>
        <div class="col-sm-5 col-6 text-right m-b-30">
            <a href="{{ route('paciente.edit', $paciente) }}" class="btn btn-primary btn-rounded"><i class="fa fa-pencil"></i> Editar Paciente</a>
            <a href="{{ route('paciente.edit', $paciente) }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Agregar Tratamiento</a>
        </div>
    </div>

    <div class="card-box profile-header">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <img class="avatar" src="{{asset('css/clinic/img/user3.png')}}" alt="">
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <br>

                                    <h3 class="user-name m-t-0 mb-0" style="color:#009EFB">{{ $paciente->nombre}}</h3>
                                    <h4 class="user-name m-t-0 mb-0">{{ $paciente->apellidos}}</h4>

                                    <div class="staff-id">Paciente ID : {{ $paciente->id}}</div>

                                    <div class="staff-msg">
                                    
                                        <form action="{{ route('paciente.destroy', $paciente) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger btn-lg" value="Eliminar">

                                        </form>
                                    </div>                                   
                                </div>
                            </div>

                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <br>
                                    <li>
                                        <span class="title">F. de Nacimiento:</span>
                                        <span class="text">{{ $paciente->fechaNacimiento}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Género:</span>
                                        <span class="text">{{ $paciente->genero}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Teléfono:</span>
                                        <span class="text">{{ $paciente->telefono}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text">{{ $paciente->email}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>
    </div>

    <div class="profile-tabs">
        <ul class="nav nav-tabs nav-tabs-bottom">
            <li class="nav-item"><a class="nav-link active show" href="#agregar-tratamiento" data-toggle="tab">Agregar Tratamiento</a></li>
            <li class="nav-item"><a class="nav-link show" href="#tratamiento-paciente" data-toggle="tab">Tratamientos</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Messages</a></li> -->
        </ul>

        <div class="tab-content">
            <div class="tab-pane show active" id="agregar-tratamiento">
                <div class="row">
                    <div class="col-md-12">

                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                            <br>
                            <div class="dash-widget-info text-center">
                                <h3>Seleccione un Tratamiento</h3>

                                <form action=" {{ route('paciente.asigna-tratamiento', $paciente) }} " method="POST">
                                    <br>
                                    @csrf

                                    <div class="form-group row">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <select class="select mdb-select md-form" name="tratamiento_id[]" multiple>
                                                
                                                @foreach($tratamientos as $tratamiento)
                                                    <option value="{{$tratamiento->id}}" {{ array_search($tratamiento->id, $paciente->tratamientos->pluck('id')->toArray()) !== false ? 'selected' : '' }}>{{$tratamiento->nombre}}</option>
                                                @endforeach
                                            </select>
                                                <!-- <select class="select" name="tratamiento_id">

                                                </select> -->
                                        </div>
                                    </div>

                                    <div class="m-t-20 text-center">
                                        <button class="btn btn-success submit-btn">Agregar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="tratamiento-paciente">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($paciente->tratamientos as $tratamiento)
                            <div class="card-box">

                                <div class="row">
                                    <div class="col-sm-7 col-6">
                                        <h3 class="card-title" style="color:#0A87C2">#{{ $paciente->id}}{{$tratamiento->id}}: {{$tratamiento->nombre }}</h3>
                                    </div>
                                    <div class="col-sm-5 col-6 text-right m-b-30">
                                        <form action="{{ route('paciente.elimina-tratamiento', $paciente) }}" method="POST">
                                            @csrf
                                            <input type="submit" class="btn btn-danger btn-lg" value="Eliminar" name="tratamiento_id">

                                        </form>
                                        <!-- <a href="#" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#delete_tratamiento" name="tratamiento_id" ><i class="fa fa-trash"></i></a> -->
                                    </div>
                                    <div class="col-sm">
                                        Dentista
                                    </div>
                                    <div class="col-sm">
                                        Fecha
                                    </div>
                                    <div class="col-sm">
                                        xxxxx
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>    
            </div>
        </div>
    </div>


@endsection
