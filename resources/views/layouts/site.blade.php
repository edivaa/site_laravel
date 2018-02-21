<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts >
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script-->
     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}"> 
     <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <div id="app">
              
          <nav>
             <div class="nav-wrapper blue">
             <div class="container">  
                <a href="#!" class="brand-logo">Sistema de Monitoramento de Gasto</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
              <ul class="right hide-on-med-and-down">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
           
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
               
              </ul>

                 </div>
            </div>
          </nav>
         

        @yield('content')
    </div>

    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}"></script-- BootStrap-->
     <script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>
     <script src="{{ asset('lib/materialize/dist/js/materialize.js')}}"></script>
     <script src="{{ asset('js/init.js')}}"></script>
</body>
</html>
