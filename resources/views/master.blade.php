<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @yield('title')

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('stisla/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            {{-- navbar --}}
            @include('components.navbar')
            <div class="main-sidebar sidebar-style-2">
                @include('components.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                @include('components.footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="stisla/modules/jquery.min.js"></script>
    <script src="stisla/modules/popper.js"></script>
    <script src="stisla/modules/tooltip.js"></script>
    <script src="stisla/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="stisla/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="stisla/modules/moment.min.js"></script>
    <script src="stisla/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="stisla/js/scripts.js"></script>
    <script src="stisla/js/custom.js"></script>
</body>

</html>
