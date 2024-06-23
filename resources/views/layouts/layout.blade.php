<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }} ">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }} ">
    <title>
        UJIKOM WEB DEVELOP
    </title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('assets/css/nucleo-icons.css') }} " rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }} " rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.1.0') }} " rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- sidebar --}}
    @include('layouts.partials.sidebar')
    <main class="main-content border-radius-lg ">
        {{-- navbar --}}
        @include('layouts.partials.navbar')

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            {{-- content --}}
            @yield('content')
            {{-- footer --}}
            @include('layouts.partials.footer')
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }} "></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }} "></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }} "></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }} "></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0') }} "></script>
</body>

</html>
