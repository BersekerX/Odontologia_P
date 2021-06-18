<!DOCTYPE html>
<html lang="es">
<!-- blank-page24:04-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/clinic/img/logo__.ico') }}">
    <title>Perfect Smile</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/clinic/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/clinic/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/clinic/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/clinic/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/clinic/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="{{asset('css/clinic/img/logo_.png')}}" width="35" height="35" alt=""> <span>Perfect Smile</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">

                <!-- @include('layouts.notificaciones') -->

                <!-- @include('layouts.mensajes') -->


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="{{ asset('css/clinic/img/user.jpg')}}" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">Mi Perfil</a>
						<a class="dropdown-item" href="edit-profile.html">Editar Perfil</a>
						<a class="dropdown-item" href="settings.html">Configuración</a>
						<a class="dropdown-item" href="login.html">Cerrar Sesión</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">Mi Perfil</a>
                    <a class="dropdown-item" href="edit-profile.html">Editar Perfil</a>
                    <a class="dropdown-item" href="settings.html">Configuración</a>
                    <a class="dropdown-item" href="login.html">Cerrar Sesión</a>
                </div>
            </div>
        </div>

        @include('layouts.menu')


        <div class="page-wrapper">
            <div class="content">
                @yield('contenido')    
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('js/clinic/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/clinic/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/clinic/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/clinic/js/jquery.slimscroll.js') }}"></script>

    <script src="{{ asset('js/clinic/js/select2.min.js')}}"></script>

    <script src="{{ asset('js/clinic/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/clinic/js/dataTables.bootstrap4.min.js')}}"></script>

	<script src="{{ asset('js/clinic/js/moment.min.js')}}"></script>
	<script src="{{ asset('js/clinic/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('js/clinic/js/app.js') }}"></script>


</body>


<!-- blank-page24:04-->
</html>