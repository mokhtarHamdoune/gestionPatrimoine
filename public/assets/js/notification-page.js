$(function(){
    var dataSended=[];
    $('#delete-all').on('change',function(e){
            if(this.hasAttribute('checked')){
                dataSended=[];
                $(".row-delete").prop("checked", false);
                $(this).attr("checked", false);
                $(".obove-table .material-icons").removeClass("enabled");
            }else{
                $('.row-delete').each(function(){
                    dataSended.push(this.id);
                }).prop("checked", true);
                $(this).attr("checked",true);
                $(".obove-table .material-icons").addClass("enabled");
            }
    });
    
    $('.row-delete').on('change',function(e){
        if($(this).prop('checked')){
            dataSended.push(this.id);
        }else{
            dataSended.splice(dataSended.indexOf(this.id),1);
        }
        checkTheCheck();
    });
    $('#delete-btn').on('click',function(e){
        e.preventDefault();
        if($(this).hasClass("enabled")){
            $.ajax({
                type: "GET",
                url: "http://127.0.0.1:8000/sg/notification/delete?ids="+dataSended,
                dataType:"json",
                success: function (response) {
                   if(response.etat){
                       dataSended.forEach(function(element){
                           $(`#${element}`).parent().parent().parent().hide('slow',function(){
                                this.remove();
                           });
                           $(".obove-table .material-icons").removeClass("enabled");
                           $('#delete-all').prop("checked", false);
                       });

                   }
                }
            });
        }
    });

    $("tbody .row").on('click',function(e){
        //empecher le checkbox de declancher le modal 
        if(e.target.tagName !=="INPUT" && e.target.tagName!=="SPAN"){
            let id =$(this).find('.row-delete').attr('id');
            $.ajax({
                type: "GET",
                url: "http://127.0.0.1:8000/sg/notification/details?id="+id,
                dataType:"json",
                success: function ({details}) {
                   $('.detail-body').eq(0).html(`<li>Nom : <span>${details.enseignant.nom}</span> </li>
                   <li>Prenom:<span>${details.enseignant.prenom}</span> </li>
                   <li>Département: <span>${details.enseignant.departement}</span> </li>`);
                   
                   $('.detail-body').eq(1).html(`<li>Nom de produit: <span>${details.equipement.nom}</span> </li>
                   <li>Reference: <span>${details.equipement.reference}</span> </li>`);

                   $('.detail-body').eq(2).text(details.commentaire);
                   let date=new Date(details.share_date);
                   $('.share-date span').text(`${date.toLocaleDateString()} ${date.toLocaleTimeString(navigator.language, {
                    hour: '2-digit',
                    minute:'2-digit'
                  })}`);
                   $('.modal').modal('open');
                }
            });
            
        }
    })

})
//function check all the rows and search if at least one of the list 
// is selected to enable the supprimer button
function checkTheCheck(){
    $('.row-delete').each(function(index,element){
        if($(element).prop("checked")){
            $(".obove-table .material-icons").addClass("enabled");
            return false;
        }
        if(index===($('.row-delete').length-1)){
            $(".obove-table .material-icons").removeClass("enabled");
        }
    })
}