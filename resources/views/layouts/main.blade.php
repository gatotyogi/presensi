<!doctype html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    {{-- asset --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/optional.css') }}">


    @yield('css')
</head>

<body data-layout="detached" data-topbar="colored">
    <div class="container-fluid">
        <div id="layout-wrapper">
            <header id="page-topbar">
                <x-topbar></x-topbar>
            </header>
            <x-sidebar></x-sidebar>
            <div class="main-content">
                <div class="page-content">
                    @yield('content')
                </div>
                <x-footer></x-footer>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/dependencies.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>


    @stack('scripts')
    @yield('js')

    @include('sweetalert::alert')
    <script>
        $(".alert").fadeTo(3000, 500).slideUp(500, function() {
            $(".alert").alert('close');
        });
    </script>
</body>

</html>