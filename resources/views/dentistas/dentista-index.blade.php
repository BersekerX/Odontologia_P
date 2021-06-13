@extends('layouts.temp')
@section('container')
        <h1> Listado de Dentistas</h1>
        
        <p><a href="{{ route('dentista.create')}}">Agregar Dentista</a></p>

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
                    <th>Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach($dentistas as $dentista)
                <tr>
                        <td>
                                <a href="{{ route('dentista.show', $dentista->id)}}">{{ $dentista->nombre}}</a>
                        </td>
                        <td>{{ $dentista->apellidos}}</td>
                        <td>{{ $dentista->genero}}</td>
                        <td>{{ $dentista->fechaNacimiento}}</td>
                        <td>{{ $dentista->especialidad}}</td>
                        <td>{{ $dentista->telefono}}</td>
                        <td>{{ $dentista->noCasa}}</td>
                        <td>{{ $dentista->calle}}</td>
                        <td>{{ $dentista->colonia}}</td>
                        <td>{{ $dentista->municipio}}</td>
                        <td>
                                <a href="{{ route('dentista.edit', $dentista)}}">Editar</a>
                        </td>

                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
