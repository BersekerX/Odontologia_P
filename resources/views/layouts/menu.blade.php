<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                @auth
                <li class="menu-title">Menú</li>
                <!-- <li>
                    <a href="index-2.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li> -->
                <li>
                    <a href="{{ route('dentista.index')}}"><i class="fa fa-user-md"></i> <span>Dentistas</span></a>
                </li>
                <li>
                    <a href="{{ route('paciente.index')}}"><i class="fa fa-user"></i> <span>Pacientes</span></a>
                </li>
                <li>
                    <a href="{{ route('tratamiento.index')}}"><i class="fa fa-calendar-check-o"></i> <span>Tratamientos</span></a>
                </li>

                <!-- <li>
                    <a href="{{ route('factura.index')}}"><i class="fa fa-money"></i> <span>Facturas</span></a>
                </li> -->

                <li>
                    <a href="{{ route('inventario.index')}}"><i class="fa fa-edit"></i> <span>Inventarios</span></a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</div>