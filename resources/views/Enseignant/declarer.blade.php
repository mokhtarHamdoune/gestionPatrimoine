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
          @include('layouts/partials/sideEN')
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
                    <h5 class="font-medium m-b-0">Contacter SG</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Contacter SG</a>
                        <a href="#" class="breadcrumb">Declarer une panne</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Form de declaration</span>
                            <form method="post" action="{{route('declarer.store',1)}}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12 m10 offset-m1">
                                        <select name="salle">
                                            <option value="" disabled selected>Choisissez la salle</option>
                                            @foreach( $salles as $salle)
                                                <option value="{{$salle->id}}">{{$salle->nom}}</option>
                                            @endforeach
                                        </select>
                                        <label>Le nom de salle</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m10 offset-m1">
                                        <select  name="type_equipe">
                                            <option disabled selected>Choisissez le materiel</option>
                                            <option>Data Show</option>
                                            <option>PC</option>
                                            <option>Haut Parleur</option>
                                        </select>
                                        <label>Type de materiel</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m10 offset-m1">
                                        <textarea id="message" name="commentaire" class="materialize-textarea"></textarea>
                                        <label for="message">Donnez une description sur le panne</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn grey darken-1 waves-effect waves-light right" type="submit" name="action">Submit
                                        </button>
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