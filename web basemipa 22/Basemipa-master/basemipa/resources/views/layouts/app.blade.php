<!--DOCTYPE html-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
        <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
        <!-- Icons -->
        <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet">

        <!-- Sleek CSS -->
        <link type="text/css" href="{{ asset('assets/css/sleek.css') }}" rel="stylesheet">

        <!-- FONTS and ICONS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
        <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
        
        <!-- SLEEK STYLE FILE -->
        <link type="text/css" href="{{ asset('assets/css/sleek.min.css') }}" rel="stylesheet">

        <!-- SLEEK STYLE FILE -->
        <script src="{{ asset('assets/plugins/nprogress/nprogress.js') }}"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <!-- TABLE CSS -->
        <link href="{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/data-tables/responsive.datatables.min.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/sleek-dashboard/dist/assets/css/sleek.min.css" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


    </head>
    <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
        
        <div class="main-content">
            @include('layouts.headers.header-dark')
        </div>

        <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        
        @stack('js')

    </body>
    <!-- Argon JS -->
        <script src="{{ asset('js/argon.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jekyll-search.min.js') }}"></script>
        <script src="{{ asset('assets/js/sleek.bundle.js') }}"></script>

        <!-- Table JS -->
        <script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>
</html>