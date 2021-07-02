@extends('layouts.clinic')
@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="card-box text-center">
                <h3>Factura</h3><br>

                <form action="{{ route('factura.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="paciente_id">ID del Paciente</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control text-center" name="paciente_id" value="" readonly="readonly" >
                                    @error('paciente_id')
                                        <div><label style="color:#DC3545">{{ $message }}</label></div>
                                    @enderror
                                </div>
                            </div> -->
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


@endsection