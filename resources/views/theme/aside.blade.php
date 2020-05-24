<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Resmia / web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                    @else
                    {{ Auth::user()->name }}
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>

                    @endguest
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="usuarios"
                        class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuarios
                            <?php use App\User; $users_count = User::all()->count(); ?>
                            <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-sticky-note"></i>
                        <p>Menú De Comidas<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('agregar-menu')}}" 
                                class="{{ Request::path() === 'agregar' ? 'nav-link active' : 'nav-link' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Menú</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="eliminar"
                                class="{{ Request::path() === 'eliminar' ? 'nav-link active' : 'nav-link' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Eliminar Menú</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="modificar"
                                class="{{ Request::path() === 'modificar' ? 'nav-link active' : 'nav-link' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modificar Menú</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('ver-menu')}}"
                                class="{{ Request::path() === 'ver' ? 'nav-link active' : 'nav-link' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ver Menú</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>