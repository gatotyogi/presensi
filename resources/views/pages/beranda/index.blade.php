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

            <div class="main-content">
                <div class="page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Beranda</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <a href="{{ route('login') }}" class="btn btn-success">Ke Halaman Login</a>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="container justify-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-primary">
                                        {{ Carbon\Carbon::parse(date('Y-m-d'))->format('l, d F Y') }}</h3>
                                </div>
                            </div>
                            <div id="cek_kartu">

                            </div>
                        </div>
                    </div>
                </div>
                <x-footer></x-footer>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/dependencies.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {

            setInterval(function() {
                $("#cek_kartu").load("{{ url('rfid/cekkartu') }}");
            }, 2000);
        });
    </script>
</body>

</html>
