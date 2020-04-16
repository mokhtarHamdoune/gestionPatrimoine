@extends('layouts.master')

@section('search_css')
<!-- this page css -->
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet">
<link href="{{asset('dist/css/pages/data-table.css')}}" rel="stylesheet">
@endsection

@section('master')

    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">UnivControl</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
          @include('layouts/partials/header')
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
          @include('layouts/partials/sideSG')
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Trouver une Salle</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Rechercher une salle</a>
                        <a href="#" class="breadcrumb">Trouver une Salle</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m10 offset-m1">
                    <div class="card white">
                        <div class="card-content black-text">
                            <h5 class="card-title darken">Resulta de recherche</h5>
                                <table id="editable-datatable" class="display">
                                    <thead>
                                        <tr>
                                            <th>Salle</th>
                                            <th>Capacité</th>
                                            <th>Heurs Libre</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>N101</td>
                                            <td>20</td>
                                            <td>8:30-10:30</td>
                                        </tr>
                                        <tr>
                                            <td>S202</td>
                                            <td>30</td>
                                            <td>8:30-11:30</td>
                                        </tr>
                                        <tr>
                                            <td>N008</td>
                                            <td>35</td>
                                            <td>8:30-13:00</td>
                                        </tr>
                                        <tr>
                                            <td>S001</td>
                                            <td>35</td>
                                            <td>8:30-10:30</td>
                                        </tr>
                                        <tr>
                                            <td>S101</td>
                                            <td>35</td>
                                            <td>8:30-10:30</td>
                                        </tr>
                                    </tbody>
                                </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('search_script')
    <script src="{{asset('assets/extra-libs/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/extra-libs/tiny-editable/numeric-input-example.js')}}"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>
@endsection