@extends('layouts.temp')
@section('container')
        <h1> Form de Dentistas</h1>

        <p><a href="{{ route('dentista.index')}}">Ver Dentistas</a></p>

        @if(isset($dentista))
                <form action="/dentista" method="POST">

                <!-- <form action="{{ route('dentista.update', $dentista) }}" method="POST"> -->
                        @method('PATCH')
        @else
                <form action="{{ route('dentista.store') }}" method="POST">
        @endif
                        @csrf
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" value= "{{ $dentista->nombre }}">
                        <br>

                        <label for="apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" value= "{{ $dentista->apellidos }}">
                        <br>

                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fechaNacimiento" value= "{{ $dentista->fechaNacimiento }}">
                        <br>

                        <label for="genero">Género:</label>
                        <input type="radio" value="H" name="genero" >Hombre
                        <input type="radio" value="M" name="genero" >Mujer
                        <input type="radio" value="O" name="genero" >Otro
                        <br>

                        <label for="especialidad">Especialidad:</label>
                        <select name="especialidad" id="">
                                <option value="Cirujano">Cirujano</option>
                                <option value="Odontólogo">Odontólogo</option>
                                <option value="Ortodoncista">Ortodoncista</option>
                                <option value="Endodoncista">Endodoncista</option>
                                <option value="Odontopediatra">Odontopediatra</option>
                        </select>
                        <br>
                        

                        <label for="telefono">Telefono:</label>
                        <input type="text" name="telefono">
                        <br>

                        <label for="noCasa">No. de Casa:</label>
                        <input type="text" name="noCasa">
                        <br>

                        <label for="calle">Calle:</label>
                        <input type="text" name="calle">
                        <br>

                        <label for="colonia">Colonia:</label>
                        <input type="text" name="colonia">
                        <br>

                        <label for="municipio">Municipio:</label>
                        <input type="text" name="municipio">
                        <br>

                        <input type="submit" value="Guardar">

                </form>
@endsection
