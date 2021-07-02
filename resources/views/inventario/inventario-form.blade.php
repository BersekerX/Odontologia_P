@extends('layouts.clinic')
@section('contenido')

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Nuevo Producto</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form action="{{ route('inventario.store') }}" method="POST">
                @csrf

                <div class="card-box">
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombreProducto">Nombre</label>
                                <input class="form-control" type="text" value="{{ old('nombreProducto') }}" name="nombreProducto">
                                @error('nombreProducto')
                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaCaducidad">Fecha de Caducidad</label>
                                <input type="date" class="form-control" value="{{ old('fechaCaducidad') }}" name="fechaCaducidad">
                                @error('fechaCaducidad')
                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ubicacion">Ubicación</label>
                                <input class="form-control" type="text" value="{{ old('ubicacion') }}" name="ubicacion">
                                @error('ubicacion')
                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tipoUnidad">Tipo de Unidad</label>
                                <input class="form-control" type="text" value="{{ old('tipoUnidad') }}" name="tipoUnidad">
                                @error('tipoUnidad')
                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stockActual">Stock Actual</label>
                                <input class="form-control" type="text" value="{{ old('stockActual') }}" name="stockActual">
                                @error('stockActual')
                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precioNeto">Costo Unitario</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                    <input class="form-control" type="text" value="{{ old('precioNeto') }}" name="precioNeto">
                                </div>
                                @error('precioNeto')
                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="fecha">Fecha de Elaboración</label>
                                <input type="date" class="form-control" value="{{ old('fecha') }}" name="fecha">
                                @error('fecha')
                                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" data-toggle="modal" data-target="#save_dentist">Añadir Producto</button>
                    </div>

                    

                
                </div>
            </form>
        </div>
    </div>

@endsection