@extends('layouts.clinic')
@section('contenido')
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Listado de Facturas</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('factura.create')}}" class="btn btn-info float-right btn-rounded"><i class="fa fa-plus"></i> Generar Factura</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                <!-- custom-table mb-0 datatable -->
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >Fecha</th>
                            <th >No. de Tratamientos</th>
                            <th >M. de Pago</th>
                            <th>Abono</th>
                            <th>Total</th>
                            <th>Paciente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($facturas as $factura)
                        <tr>
                        <!-- style="min-width: 200px;" -->
                            <td >
                                {{ $factura->id}}
                            </td>
                            <td>{{ $factura->fecha }}</td>
                            <td>{{ $factura->noTratamientos}}</td>
                            <td><span class="custom-badge status-green">{{ $factura->metodoPago}}</span></td>
                            <td>{{ $factura->abono}}</td>
                            <td>{{ $factura->totalFactura}}</td>
                            <td>{{ $factura->paciente->nombre}}</td>

                            <!-- Action -->
                            <td>
                                <a href="{{ route('paciente.edit', $paciente)}}"><i class="fa fa-pencil m-r-10"></i></a>
                                <a href="#" data-toggle="modal" data-target="#delete_paciente"><i class="fa fa-trash-o m-r-5"></i></a>
                                

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
