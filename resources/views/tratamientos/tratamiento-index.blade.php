@extends('layouts.clinic')
@section('contenido')
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Dentistas</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('dentista.create')}}" class="btn btn-info float-right btn-rounded"><i class="fa fa-plus"></i> Agregar Dentista</a>
        </div>
    </div>

    <div class="row doctor-grid">
        @foreach($dentistas as $dentista)
        <div class="col-md-4 col-sm-4  col-lg-3">
            <div class="profile-widget">
                <div class="doctor-img">
                    <a class="avatar" href="{{ route('dentista.show', $dentista->id)}}"><img alt="" src="{{ asset('css/clinic/img/dentista.png') }}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('dentista.edit', $dentista) }}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                        <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a> -->
                    </div>
                </div>
                <h4 class="doctor-name text-ellipsis"><a href="{{ route('dentista.show', $dentista->id)}}">{{ $dentista->nombre}}</a></h4>
                <h4 class="doctor-name text-ellipsis"><a href="{{ route('dentista.show', $dentista->id)}}">{{ $dentista->apellidos}}</a></h4>

                <div class="doc-prof">{{ $dentista->especialidad }}</div>
                <div class="user-country">
                    <i class="fa fa-phone"></i> {{ $dentista->telefono }}
                </div>
            </div>
        </div>
        @endforeach
    </div>

    
    <div class="row">
        <div class="col-sm-12">
            <div class="see-all">
                <a class="see-all-btn" href="javascript:void(0);">Load More</a>
            </div>
        </div>
    </div>
@endsection
