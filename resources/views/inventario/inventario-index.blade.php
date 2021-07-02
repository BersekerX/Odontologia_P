@extends('layouts.clinic')
@section('contenido')

    <div class="row">
        <div class="col-sm-5 col-4">
            <h4>Lista de Inventario</h4>
        </div>
        <div class="col-sm-7 col-8 text-right m-b-30">
            <a href="{{route('inventario.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>Nuevo Producto</a>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre Producto</th>
                            <th>Fecha Caducidad</th>
                            <th>Ubicación</th>
                            <th>Tipo Unidad</th>
                            <th>Stock Actual</th>
                            <th>Costo Unitario</th>
                            <th>Fecha Elaboración</th>
                            <th>Elaboró</th>
                            <!-- <th class="text-right">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventarios as $inventario)
                        <tr>
                            <td style="color:#0466c8"><strong>#INV-0{{$inventario->id}}</strong></td>
                            <td style="color:#390099">{{$inventario->nombreProducto}}</td>
                            <td>{{ $inventario->fechaCaducidad }}</td>
                            <td>{{ $inventario->ubicacion }}</td>
                            <td>{{ $inventario->tipoUnidad }}</td>
                            <td>{{ $inventario->stockActual }}</td>
                            <td>{{ $inventario->precioNeto }}</td>
                            <td><span class="custom-badge status-green">{{ $inventario->fecha }}</span></td>
                            <td><span class="custom-badge status-blue">{{ $inventario->user->name }}</span></td>

                            <!-- <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="invoice-view.html"><i class="fa fa-eye m-r-5"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_invoice"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
