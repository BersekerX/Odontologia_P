@extends('layouts.clinic')
@section('contenido')
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Tratamientos</h4>
        </div>
        
    </div>

        <div class="row doctor-grid">
            @foreach($tratamientos as $tratamiento)
            <div class="col-md-6 col-sm-6  col-lg-6">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="#"><img alt="" src="{{ asset('css/clinic/img/dental1.jpg') }}"></a>
                    </div>
                    <!-- <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                        </div>
                    </div> -->
                    <h4 class="doctor-name text-ellipsis"><a href="#">{{ $tratamiento->nombre}}</a></h4>

                    <div class="doc-prof">{{ $tratamiento->descripcion}}</div>
                    <div class="user-country">
                        <i class="fa fa-dollar"></i> {{ $tratamiento->precio }}
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
