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
                <?php foreach ($nom_promo as $o){ $nompromo = $o->nom ; $idpromo = $o->id;}?>
                    <h5 class="font-medium m-b-0">Promo  : <?php echo $nompromo ?></h5>
                   </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="">
                                <div class="row">
                                    <div class="col l3 pr-0">
                                        <div class="card-content b-b">
                                            <h4 class="card-title mt-2">Liste modules</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="row">
                                                <div class="col m12">
                                                    <div id="" class="">
                                                   <?php foreach($modules as $module) : ?>
                                                        <div  data-class="blue"><i class="fa fa-circle blue-text m-r-10"></i><?php echo $module->nom ?></div>
                                                        <br>
                                                    <?php endforeach ; ?>
                                                    </div>
                                                    <!-- 
                                                    <p class="m-l-10 m-t-10">
                                                        <label>
                                                            <input type="checkbox" id="drop-remove"/>
                                                            <span for="drop-remove">Remove after drop</span>
                                                        </label>
                                                    </p>
                                                    checkbox -->
                                                    <a href="#add-module" class="btn light-blue lighten-1 modal-trigger m-t-10 m-l-10">
                                                        <i class="ti-plus font-12"></i> Ajouter module
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l9">
                                        <div class="card-content b-l calender-sidebar">
                                            
                                                <table class="table" >
                                                <tr>
                                                    <td>  -  </td>
                                                    <td>Dimanche</td>
                                                    <td>Lundi</td>
                                                    <td>Mardi</td>
                                                    <td>Mercredo</td>
                                                    <td>Jeudi</td>
                                                </tr>

   <tr>                                            

                                        <?php 

$i=1;
 foreach($seances as $seance):

 if($i==1)   echo "<td>08h30 - 10h00</td>";
 if($i==6)   echo "</tr><tr><td>10h00 - 11h30</td>";
 if($i==11)   echo "</tr><tr><td>11h30 - 13h00</td>";
 if($i==16)   echo "</tr><tr><td>13h30 - 15h00</td>";
 if($i==21)   echo "</tr><tr><td>15h00 - 16h30</td>";

    if($seance->id_module !='')
{
    echo '<td> '.$seance->nom_module.'   <button href="#delete-event" class="modal-trigger"  onclick="update_var('.$seance->id.')"   style="float: right;border-radius: 50%;background-color: red;color:#fff;font-size: 10px;" modal-trigger">X</button> <br> '.$seance->nom_prof.' <br> '.$seance->nom_salle.' <br></td>';
}
else
{
    echo '<td><button   href="#add-new-event" onclick="update_var('.$seance->id.')" class="btn light-blue lighten-1 modal-trigger m-t-10 m-l-10">ajouter</button></td>';

}

$i++;
endforeach; ?>
</tr>
</table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal bottom-sheet" id="my-event">
                    <div class="modal-content">
                        <h4><strong>Change Event</strong></h4>
                        <div class="modal-body"></div>                        
                        <div class="modal-footer">
                            <button type="button" class="btn blue lighten-1 waves-effect modal-close">Close</button>
                            <button type="button" class="btn green lighten-1 save-event">Create event</button>
                            <button type="button" class="btn red lighten-2 delete-event">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal" id="add-new-event">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Ajouter </strong> seance</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">


                                <div class="col s12 m3">
                                        <label class="control-label">Module</label>
                                        <select class="browser-default" id="module">
                                        <?php foreach($modules as $module) : ?>
                                            <option value="<?php echo $module->id ?>"><?php echo $module->nom ?></option>
                                                 <?php endforeach ;?>
                                        </select>
                                    </div>
                                  
                                    <div class="col s12 m3">
                                        <label class="control-label">Ensegnant</label>
                                        <select class="browser-default"  id="prof">
                                        <?php foreach($profs as $prof) : ?>
                                            <option value="<?php echo $prof->id ?>"><?php echo $prof->nom ?></option>
                                                 <?php endforeach ;?>
                                        </select>
                                 </select>
                                    </div>

                                    <div class="col s12 m3" >
                                        <label class="control-label" >Salle</label>

                                        <select class="browser-default"  id="salle" >
                                           
                                       </select>

                                    </div>
                             <style>
                                    .Select-input option[value=momo] { !important;}
</style>

                                    <div class="col s12 m3">
                                        <label class="browser-default">Type seance</label>
                                        <select class="browser-default"  id="type">
                                            <option value="TD">TD</option>
                                            <option value="TP">TP</option>
                                            <option value="COURS">COURS</option>
                                        </select>
                                    </div>


                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue darken-2 modal-close save-category" onclick='ajouter_seance()'    >Ajouter</button>
                            <button type="button" class="btn light-blue lighten-1 modal-close">Annuler</button>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
     
     
     
     <script>
     var_traitement = null ;

     

     function ajouter_seance()
     {
       
        var id_prof =  document.getElementById('prof').value;
       var id_module =  document.getElementById('module').value;
       var id_salle = document.getElementById('salle').value;
       var type_seance =  document.getElementById('type').value;
       var id_seance = var_traitement ; 
       
       
        $.ajax({
                type:'POST',
                url:'/ajaxaddseance',
                data:{ "id_seance":id_seance  ,  "id_module":id_module , "type_seance":type_seance , "id_salle":id_salle, "id_prof":id_prof  ,"_token": "{{ csrf_token() }}"  },
                success:function(data){
                    window.location.href = window.location.href ;
                }

            });  
    
    


    
    
    }
     function ajouter_module()
     {
         var nom_module =  document.getElementById('input_module').value; 
         var id_promo = '<?php echo $idpromo ?>';
 //       alert('ajouter module : '+ module + ' et  id promo ' + id_promo);

        $.ajax({
                type:'POST',
                url:'/ajaxAddmodule',
                data:{"nom_module":nom_module, "id_promo":id_promo , "_token": "{{ csrf_token() }}"  },
                success:function(data){
                    window.location.href = window.location.href ;
                }

            });

    }




     function supprime_seance()
     {
       // alert('supprime  seance : '+var_traitement);
       var id_seance  =  var_traitement ;
        $.ajax({
                type:'POST',
                url:'/ajaxdeleteseance',
                data:{"id_seance":id_seance,"_token": "{{ csrf_token() }}"  },
                success:function(data){
                    window.location.href = window.location.href ;
                }

            });  
     }

     function update_var(x)
     {
        var_traitement = x;
        
        var id_seance=x;
        
         $.ajax({
                type:'POST',
                url:'/ajaxupdatesalle',
                data:{"id_seance":id_seance ,"_token": "{{ csrf_token() }}"  },
                success:function(data){
                    eval(data);
                    
    //   alert(data);
                }

            });  


     }
     </script>   


<div>

<div id='get_data_script'></div>
                <div class="modal" id="add-module">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Ajouter </strong> module</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                  
                                

                                    <div class="col s12 m4">
                                        <label class="control-label">nom module</label>
                                            <input type="text" id='input_module'>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue darken-2 modal-close save-category" onclick='ajouter_module()'>Ajouter</button>
                            <button type="button" class="btn light-blue lighten-1 modal-close">Annuler</button>
                        </div>
                    </div>
                </div>
              



















     
     
                <!-- Modal Add Category -->
                <div class="modal" id="delete-event">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Supprimer </strong> seance</h4>
                        </div>
                        <div class="modal-body">
                                <div class="row">
                                  
                                    Vollez vous vraiment supprimé cette seance
                             
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue darken-2 modal-close save-category" onclick='supprime_seance()'>Supprimé</button>
                            <button type="button" class="btn light-blue lighten-1 modal-close">Annuler</button>
                        </div>
                    </div>
                </div>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
 

        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
   @endsection