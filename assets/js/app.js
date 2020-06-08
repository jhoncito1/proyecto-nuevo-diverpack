

$('.btn-ajax').click(function(){
 var id_user=   $(this).attr('data-user');
 
    // $('#modalDetail').modal('show');
    $.ajax({
        type: 'GET',
        url: '?clase=roles&method=details',
        data: {id_user:id_user},
        success(response){
            $('#detailRol').html(response);
            $('#modalDetail').modal('show');

        }
    });
    
    // $('#modalDetail').modal('show');
});