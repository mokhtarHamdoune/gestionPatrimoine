<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>UnivControl</title>
     <!-- chartist CSS -->
     <link href="{{asset('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- this page css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/pages/dashboard1.css')}}" rel="stylesheet">
    @yield('search_css')
</head>

<body>

        @yield('master')

        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/materialize.js')}}"></script>
        <script src="{{asset('assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Apps -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <!-- <script src="{{asset('assets/js/jqury.js')}}"></script> -->
        <script src="{{asset('assets/js/app.init.light-sidebar.js')}}"></script>
        <script src="{{asset('assets/js/app-style-switcher.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Custom js -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/js/custom.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
        <script src="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
        <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
        <script src="{{asset('assets/js/pages/dashboards/dashboard1.js')}}"></script>
        @yield('result_script')
        
    </body>

    </html>