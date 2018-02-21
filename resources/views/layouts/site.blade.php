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
              
         <header>
         @include('layouts._site._nave')
         </header>

        @yield('content')
    </div>

    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}"></script-- BootStrap-->
     <script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>
     <script src="{{ asset('lib/materialize/dist/js/materialize.js')}}"></script>
     <script src="{{ asset('js/init.js')}}"></script>
</body>
</html>
