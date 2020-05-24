<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Admin</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
     <script src="dist/js/adminlte.js"></script>
 
     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 
     <!-- Styles -->
     <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!--Inicio NavBar-->
    @include("theme/navBar")
    <!--Fin NavBar-->
    <!--Inicio Aside-->
    @include("theme/aside")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-md-12">
                <h1 style="color: green">Panel Administrativo para menu</h1>
              </div>
              <div class="col-md-12">
                @yield('busqueda')
              </div>
            </div>
          </div>
        </section>
        <section>
  
        </section>
  
        <div class="container">
          @yield('contenido')
        </div>
  
      </div>
      <!-- Inicio footer-->
      @include("theme/footer")
      <!-- Fin footer-->
    </div>
</body>
</html>