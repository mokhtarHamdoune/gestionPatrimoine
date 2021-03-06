@extends('layouts.master')

@section('search_css')
<!-- this page css -->
<!-- <link href="{{asset('dist/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/extra-libs/prism/prism.css')}}" rel="stylesheet"> -->
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
                <div class="col s12 m8 offset-m2">
                    <div class="card white">
                        <div class="card-content black-text">
                            <h5 class="card-title darken">Rechercher une salle</h5>
                            <form action="{{route('search.result',$id_depart)}}">
                                <!-- @csrf -->
                                <div class="form-body">
                                    <div class="card-content">
                                        <h6 class="font-medium">A propos De Salle</h6>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">school</i>
                                                    <select name="faculte">
                                                        <option value="" disabled selected>Faculté</option>
                                                        <option>Science</option>
                                                        <option>Biologie</option>
                                                        <option>Lettre</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">assignment_turned_in</i>
                                                    <input id="icon_prefix4" type="text" name="date_res" class="validate datepicker">
                                                    <label for="icon_prefix4">Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">cached</i>
                                                    <select name="start_time">
                                                        <option selected disabled>Heure Debut</option>
                                                        <option value="0">08h30</option>
                                                        <option value="1">10h00</option>
                                                        <option value="2">11h30</option>
                                                        <option value="4">13h30</option>
                                                        <option value="5">15h00</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">autorenew</i>
                                                    <select name="end_time">
                                                        <option selected disabled>Heure Fin</option>
                                                        <option value="1">10h00</option>
                                                        <option value="2">11h30</option>
                                                        <option value="3">13h00</option>
                                                        <option value="5">15h00</option>
                                                        <option value="6">16h30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">group</i>
                                                    <select name="type">
                                                        <option selected disabled>Type Salle</option>
                                                        <option>TD</option>
                                                        <option>Amphi</option>
                                                        <option>Labo Pysique</option>
                                                        <option>Labo Chimie</option>
                                                        <option>Labo Informatique</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="card-content">
                                        <h6 class="font-medium">Equipements Associes</h6>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">school</i>
                                                    <select multiple name="equipement[]">
                                                        <option disabled selected>Aucun</option>
                                                        <option>Data Show</option>
                                                        <option>PC</option>
                                                        <option>Haut Parleur</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="card-content">
                                        <div class="form-action">
                                            <button class="btn waves-effect waves-light cyan right" type="submit" name="action">Chercher
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('search_script')

@endsection