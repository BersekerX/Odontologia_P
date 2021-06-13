@extends('layouts.temp')
@section('container')
        <h1> Detalles del Dentista</h1>
        
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
                    <td>{{ $d->nombre}}</td>
                    <td>{{ $d->apellidos}}</td>
                    <td>{{ $d->genero}}</td>
                    <td>{{ $d->fechaNacimiento}}</td>
                    <td>{{ $d->especialidad}}</td>
                    <td>{{ $d->telefono}}</td>
                    <td>{{ $d->noCasa}}</td>
                    <td>{{ $d->calle}}</td>
                    <td>{{ $d->colonia}}</td>
                    <td>{{ $d->municipio}}</td>

                </tr>
            </tbody>
        </table>
@endsection
