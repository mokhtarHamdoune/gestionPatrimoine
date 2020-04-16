<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>UnivControl</title>
    @yield('index_css')
    @yield('search_css')
</head>

<body>

        @yield('master')

        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/materialize.min.js')}}"></script>
        <script src="{{asset('assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Apps -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="{{asset('assets/js/app.init.light-sidebar.js')}}"></script>
        <script src="{{asset('assets/js/app-style-switcher.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Custom js -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/js/custom.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        @yield('search_script')
        @yield('index_script')
        
    </body>

    </html>