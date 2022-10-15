<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Navbar - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/main/app.css">

    <link rel="shortcut icon" href="{{ asset('mazer') }}/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer') }}/assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/pages/datatables.css">
    @stack('css')
</head>

<body>
    <div id="app">
        @include('layouts.backend.data.sidebar')
        <div id="main" class='layout-navbar'>
            @include('layouts.backend.data.navbar')
            <div id="main-content">
                <div class="page-heading">
                    @include('layouts.backend.data.breadcrumbs')
                    <section class="section">
                        @yield('content')
                    </section>
                </div>
                @include('layouts.backend.data.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('mazer') }}/assets/js/bootstrap.js"></script>
    <script src="{{ asset('mazer') }}/assets/js/app.js"></script>

    <script src="{{ asset('mazer') }}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ asset('mazer') }}/assets/js/pages/datatables.js"></script>
@stack('js')
</body>

</html>
