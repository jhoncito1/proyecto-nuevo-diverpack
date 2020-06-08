$(document).ready(function(){

alert("aksdhasdaskjdh");
});


$('.btnmodal').click(function(){
    alert("bien");
    var id = $(this).attr('data-user');
    alert(id);
    $.ajax({
        type: 'GET',
        url: '?clase=roles&method=details',
        data: {id_rol: id},
        success(response){
            $('detailRol').html(response);
            $('#modalDetail').modal('show');

        }
    })
    
});