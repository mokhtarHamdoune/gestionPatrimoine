@extends('layouts.master')

@section('search_css')
<!-- this page css -->
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/extra-libs/prism/prism.css')}}" rel="stylesheet">
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
                            <form>
                                <div class="form-body">
                                    <div class="card-content">
                                        <h6 class="font-medium">A propos De Salle</h6>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">school</i>
                                                    <select>
                                                        <option value="" disabled selected>Faculté</option>
                                                        <option value="1">Sience</option>
                                                        <option value="2">Langue Etrangère</option>
                                                        <option value="3">Biologie</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">assignment_turned_in</i>
                                                    <input id="icon_prefix4" type="text" class="validate datepicker">
                                                    <label for="icon_prefix4">Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">cached</i>
                                                    <input id="icon_prefix6" type="text" class="validate datepicker">
                                                    <label for="icon_prefix6">Start Time</label>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">autorenew</i>
                                                    <input id="icon_prefix7" type="text" class="validate datepicker">
                                                    <label for="icon_prefix7">End Time</label>
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
                                                    <select multiple>
                                                        <option value="1" selected>Aucun</option>
                                                        <option value="2">Data Show</option>
                                                        <option value="3">PC</option>
                                                        <option value="4">Haute Parleure</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="card-content">
                                        <h6 class="font-medium">A propos de groupe</h6>
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="far fa-building prefix"></i>
                                                    <select>
                                                        <option selected disabled>Department</option>
                                                        <option value="1">Informatique</option>
                                                        <option value="2">Mathématique</option>
                                                        <option value="3">Physique</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="fas fa-level-up-alt prefix"></i>
                                                    <select >
                                                        <option selected disabled>Année</option>
                                                        <option value="2">L1</option>
                                                        <option value="3">L2</option>
                                                        <option value="4">L3</option>
                                                        <option value="5">M1</option>
                                                        <option value="6">M2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="fas fa-code-branch prefix"></i>
                                                    <select >
                                                        <option selected disabled>Spécialité</option>
                                                        <option value="2">GL</option>
                                                        <option value="3">RSD</option>
                                                        <option value="4">SIC</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">group</i>
                                                    <select >
                                                        <option value="1" selected>Numéro Du Groupe</option>
                                                        <option value="2">Groupe 1</option>
                                                        <option value="3">Groupe 2</option>
                                                        <option value="4">Groupe 3</option>
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