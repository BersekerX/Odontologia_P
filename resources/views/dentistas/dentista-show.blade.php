@extends('layouts.temp')
@section('container')
@extends('layouts.clinic')
@section('contenido')


    <div class="row">
        <div class="col-sm-7 col-6">
            <!-- <h4 class="page-title">My Profile</h4> -->
            <h2>Detalles del Dentista</h2>
        </div>
        <div class="col-sm-5 col-6 text-right m-b-30">
            <a href="{{ route('dentista.edit', $dentistum) }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Editar Dentista</a>
        </div>
    </div>


    <div class="card-box profile-header">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                <br>

                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            
                            <img class="avatar" src="{{asset('css/clinic/img/dentista.png')}}" alt="">
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <br>
                                    <h3 class="user-name m-t-0 mb-0" style="color:#009EFB">{{ $dentistum->nombre}}</h3>
                                    <h4 class="user-name m-t-0 mb-0">{{ $dentistum->apellidos}}</h4>

                                    <span class="text-muted">{{ $dentistum->especialidad}}</span>
                                    <!-- <div class="staff-id"><span class="text">{{ $dentistum->especialidad}}</span></div> -->

                                    <div class="staff-id">Paciente ID : {{ $dentistum->id}}</div>
                                    
                                    <div class="staff-msg">
                                    
                                        <form action="{{ route('dentista.destroy', $dentistum) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <!-- <input class="btn btn-danger" type="submit">Eliminar</button> -->
                                            <input type="submit" class="btn btn-danger btn-lg" value="Eliminar">

                                        </form>
                                    
                                    
                                        <!-- <a href="chat.html" class="btn btn-primary">Send Message</a> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Vista Izquierda -->
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Fecha de Nacimiento:</span>
                                        <span class="text">{{ $dentistum->fechaNacimiento}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Género:</span>
                                        <span class="text">{{ $dentistum->genero}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Teléfono:</span>
                                        <span class="text">{{ $dentistum->telefono}}</span>
                                    </li>
                                    <li>
                                        <span class="title">No. Casa:</span>
                                        <span class="text">{{ $dentistum->noCasa}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Calle:</span>
                                        <span class="text">{{ $dentistum->calle}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Municipio:</span>
                                        <span class="text">{{ $dentistum->municipio}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Estado:</span>
                                        <span class="text">{{ $dentistum->estado}}</span>
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






        <!-- <h1> Detalles del Dentista</h1>
        
        <p><a href="{{ route('dentista.index')}}">Ver Dentistas</a></p>

        <table border="1px">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Género</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Especialidad</th>
                    <th>Teléfono</th>
                    <th>No. de Casa</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Municipio</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $dentistum->nombre}}</td>
                    <td>{{ $dentistum->apellidos}}</td>
                    <td>{{ $dentistum->genero}}</td>
                    <td>{{ $dentistum->fechaNacimiento}}</td>
                    <td>{{ $dentistum->especialidad}}</td>
                    <td>{{ $dentistum->telefono}}</td>
                    <td>{{ $dentistum->noCasa}}</td>
                    <td>{{ $dentistum->calle}}</td>
                    <td>{{ $dentistum->colonia}}</td>
                    <td>{{ $dentistum->municipio}}</td>

                </tr>
            </tbody>
        </table> -->
@endsection
