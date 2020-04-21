@extends('layouts.master')

@section('search_css')
<!-- this page css -->
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
                                            <th>Type Salle</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($salles as $salle)
                                        <tr id="{{$salle->id}}">
                                            <td>{{$salle->nom}}</td>
                                            <td>{{$salle->type_salle}}</td>
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
    <!-- Modal Structure -->
    <!-- <button id="modal_1" class="btn">Modal</button> -->
    <div class="row">
    <form id="modal1" class="modal" action="{{route('search.reserver',$departement->id)}}" method="POSt">
        @csrf
        <div class="modal-content">
            <h4>Reserver La Salle <span id="salle"></span></h4>
            <div>
                <div class="row">
                    <div class="col m8 s12 offset-m2 ">
                        <label>Enseignant</label>
                        <select class="browser-default" name="prof">
                            @foreach($departement->profs as $prof)
                            <option value="{{$prof->id}}">{{$prof->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- pwd -->
                <div class="row">
                    <div class="col m8 s12 offset-m2">
                        <label>Promo</label>
                        <select class="browser-default" name="promo">
                            @foreach($departement->promos as $promo)
                            <option value="{{$promo->id}}">{{$promo->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m8 s12 offset-m2 ">
                        <input id="name" name="titre" type="text">
                        <label for="name">Titre</label>
                    </div>
                </div>
                <input type="hidden" name="salle_id" value="" />
                <input type="hidden" name="date_res" value="{{$date}}" />
                <input type="hidden" name="heure_deb" value="{{$heure_deb}}" />
                <input type="hidden" name="heure_fin" value="{{$heure_fin}}" />
            </div>
        </div>
        <div class="divider"></div>
        <div class="modal-footer">
            <button type='button' class="modal-action modal-close waves-effect waves-green btn-flat">Annuler</button>
            <button type="submit" class="btn waves-effect">Sauvrader</button>
        </div>
    </form>
    
    </div>
@endsection

@section('result_script')
    <script src="{{asset('assets/extra-libs/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/extra-libs/tiny-editable/numeric-input-example.js')}}"></script>
    <script>
    $(function() {
        $('#editable-datatable').DataTable();
        $('tbody tr').on("click",function(){
            $("#salle").text($(this).find('td')[0].textContent);
            $("#modal1 input[name='salle_id']").val($(this).attr("id"));
            $(".modal").modal('open');
            
        });
    });
    </script>
@endsection