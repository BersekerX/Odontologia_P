@extends('layouts.clinic')
@section('contenido')

    <div class="row">
        <div class="col-sm-7 col-6">
            <!-- <h4 class="page-title">My Profile</h4> -->
            <h2>Detalles del Paciente</h2>
        </div>
        <div class="col-sm-5 col-6 text-right m-b-30">
            <a href="{{ route('paciente.edit', $paciente) }}" class="btn btn-primary btn-rounded"><i class="fa fa-pencil"></i> Editar Paciente</a>
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
                                        @can('delete',$paciente)
                                        <button class="btn btn-danger btn-lg"  data-toggle="modal" data-target="#delete_paciente"><i class="fa fa-trash-o m-r-5"></i>Eliminar</button>
                                        @endcan

                                        <div id="delete_paciente" class="modal fade delete-modal" role="dialog">
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
                                                                <!-- <button type="submit" class="btn btn-danger btn-lg">Borrar</button> -->
                                                                <input type="submit" class="btn btn-danger" value="Si">
                                                        
                                                            </form>

                                                            <!-- <button type="submit" class="btn btn-danger">Borrar</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
            <li class="nav-item"><a class="nav-link show" href="#agregar-factura" data-toggle="tab">Agregar Factura</a></li>
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
                                    <div class="col-sm-5 col-6 text-right m-b30">  
                                    </div>
                                    <div class="col-sm">
                                        Precio: {{$tratamiento->precio}}
                                    </div>
                                    <div class="col-sm">
                                        
                                    </div>
                                    <div class="col-sm">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>    
            </div>

            <div class="tab-pane show" id="agregar-factura">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box text-center">
                            <h3>Factura</h3><br>
                            <h3>Aun en desarrollo</h3><br>

                            <form action="{{ route('paciente.asigna-factura', $paciente) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="paciente_id">ID del Paciente</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control text-center" name="paciente_id" value="{{ $paciente->id}}" readonly="readonly" >
                                                @error('paciente_id')
                                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="fecha">Fecha</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" name="fecha">
                                                @error('fecha')
                                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="abono">Abono</label>
                                            <div class="col-md-9">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" type="text" name="abono">
                                                </div>
                                                @error('abono')
                                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <!-- RighSide -->

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-5 col-form-label" for="noTratamientos">No. Tratamientos</label>
                                        <!-- {{
                                                $tratamientos=0
                                            }} -->
                                            @foreach($paciente->tratamientos as $tratamiento)
                                                <!-- {{
                                                    $tratamientos += 1
                                                }} -->
                                            @endforeach
                                            
                                            <div class="col-md-7">
                                                <input type="text" class="form-control text-center" name="noTratamientos" value="{{$tratamientos}}" readonly="readonly" >
                                                @error('noTratamientos')
                                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5 col-form-label" for="metodoPago">Metodo de Pago</label>
                                            <div class="col-md-7">
                                                <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="metodoPago">
                                                    <option value="Efectivo">Efectivo</option>
                                                    <option value="Tarjeta">Tarjeta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-md-5 col-form-label" for="deuda">Deuda</label>
                                            <div class="col-md-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" type="text" name="deuda">
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label class="col-md-5 col-form-label" for="totalFactura"><strong>TOTAL</strong></label>
                                            <div class="col-md-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <!-- {{
                                                        $total=0
                                                    }} -->
                                                    @foreach($paciente->tratamientos as $tratamiento)
                                                        <!-- {{
                                                            $total += $tratamiento->precio
                                                        }} -->
                                                    @endforeach

                                                    <!-- <input type="text" class="form-control text-center" name="totalFactura" value="{{ $total}}" readonly="readonly" > -->

                                                    <input type="text" class="form-control text-center" name="totalFactura" value="{{ $total}}" >
                                                    @error('totalFactura')
                                                        <div><label style="color:#DC3545">{{ $message }}</label></div>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button class="btn btn-info submit-btn" data-toggle="modal" data-target="#save_factura">Guardar</button>
                                </div>

                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
