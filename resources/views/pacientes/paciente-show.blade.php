@extends('layouts.clinic')
@section('contenido')

    <div class="row">
        <div class="col-sm-7 col-6">
            <!-- <h4 class="page-title">My Profile</h4> -->
            <h2>Detalles del Paciente</h2>
        </div>
        <div class="col-sm-5 col-6 text-right m-b-30">
            <a href="{{ route('paciente.edit', $paciente) }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Editar Paciente</a>
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
                                            <!-- <input class="btn btn-danger" type="submit">Eliminar</button> -->
                                            <input type="submit" class="btn btn-danger btn-lg" value="Eliminar">

                                        </form>
                                    
                                    
                                        <!-- <a href="chat.html" class="btn btn-primary">Send Message</a> -->
                                    </div>                                   
                                </div>
                            </div>

                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Fecha de Nacimiento:</span>
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
@endsection
