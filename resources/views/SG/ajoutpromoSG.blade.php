@extends('layouts.master')
@section('master')

<!--  auth id_depart -->
<?php  $iddepart = 1 ?>

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
                    <h5 class="font-medium m-b-0">Ajouter une promo</h5>
                   </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <!-- ============================================================== -->
                <!-- Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col s12">
    
                    <div class="collection">
              
              
                <input type="text" id='nom_promo'>
                <button onclick="ajaxnewpromo()">ajouter promo</button>

<script>
function ajaxnewpromo()
{
    var nom_promo = document.getElementById('nom_promo').value;
    var id_depart = '<?php echo $iddepart ?>';

    $.ajax({
                type:'POST',
                url:'/ajaxnewpromo',
                data:{"nom_promo":nom_promo, "id_depart":id_depart , "_token": "{{ csrf_token() }}"  },
                success:function(data){
                    window.location.href = window.location.href ;
                }

            });

}
</script>
              
              <?php     
               foreach ($promos as $promo):  ?>
                    <a href="empoidutemps/<?php echo $promo->id ?>" class="collection-item"><?php echo $promo->nom ?></a>
                          <?php  endforeach;?>
                   
                    </div>


                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
             </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
        </div>


        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
   @endsection