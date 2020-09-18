@extends('layouts.master')

@section('search_css')
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
        <div class="page-wrapper" id="notif-page">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Gestion Des Notification</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Gestion Des Notification</a>
                    </div>
                </div>
            </div>
            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4 class="modal-title">Détails</h4>    
                    <div class="details">
                        <div class="enseignat-container">
                            <h6 class="details-title">About Enseigant</h6>
                            <ul class="detail-body">
                                <li>Nom : <span>Hamdoune</span> </li>
                                <li>Prenom:<span>Mokhtar</span> </li>
                                <li>Département: <span>Physique</span> </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="materiel">
                            <h6 class="details-title">About Equipement</h6>
                            <ul class="detail-body">
                                <li>Nom de produit: <span>Samsung</span> </li>
                                <li>Reference: <span>15468T</span> </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="commentaire">
                            <h6 class="details-title">Commentaire sur le panne</h6>
                            <div class="detail-body">
                                bl bla bla bla 
                            </div>
                        </div>
                        <hr>
                        <div class="share-date">
                            <span>24-07-2020 11:30</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m10 offset-m1">
                    <div class="card white notif-container">
                        <div class="card-content black-text">
                            <div class="obove-table">
                                <label>
                                    <input type="checkbox" class="filled-in" id="delete-all" />
                                    <span>Selectionnez tous</span>
                                </label>
                                <div class="delete-icon">
                                    <i class="material-icons" id="delete-btn">delete</i>
                                </div>
                            </div>
                            <div class="table-container">
                                <table id="notif-datatable" class="striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th  colspan="2">Déclarateur</th>
                                            <th>Salle</th>
                                            <th>Material</th>
                                            <th>Date et heure</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pannes as $panne)
                                        <tr class="row">
                                            <td>
                                                <label>
                                                    <input type="checkbox" id="{{$panne->id}}" class="filled-in row-delete"/>
                                                    <span> </span>
                                                </label>
                                            </td>
                                            <td>
                                                {{$panne->Declarateur->nom}}
                                                {{$panne->Declarateur->prenom}}
                                            </td>
                                            <td>
                                                {{$panne->equipement->salle->nom}}
                                            </td>
                                            <td>
                                                {{$panne->equipement->nom}}
                                            </td>
                                            <td>
                                                {{$panne->created_at}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('result_script')
    <script src="{{asset('assets/extra-libs/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/extra-libs/tiny-editable/numeric-input-example.js')}}"></script>
    <script src="{{asset('assets/js/notification-page.js')}}"></script>
@endsection