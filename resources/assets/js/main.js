$('#btn-edit-form').click(function(){
    $('input').toggleClass('form-control-plaintext').toggleClass('form-control');
    var $inp = $('input');
    if ($inp.attr('readonly')){
        $inp.attr('readonly',true);
    }else{
        $inp.attr('readonly',false);
    }
    var $slc = $('select');
    if ($slc.attr('disabled')){
        $slc.attr('disabled',false);
    }else{
        $slc.attr('disabled',true);
    }

    $('.form-row-edit').toggleClass('d-none')
});


$('.modalAdmin').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var modalType = button.data('modal');
    var modal = $(this);
    if (modalType == 'edit'){
        $(modal).find('.modal-dialog').addClass('modal-lg');
        $(modal).find('.modal-dialog').removeClass('modal-sm');
        var code = button.data('code');
        var url = 'user/'+code;
        $.ajax({
            url: url,
            method: "GET",
            success: function(result){
                $("#modalBodyAdmin").html(result);
            }
        });
    }else if(modalType == 'delete'){
        $(modal).find('.modal-dialog').removeClass('modal-lg');
        $(modal).find('.modal-dialog').addClass('modal-sm');
        $("#modalBodyAdmin").html('¿Desea borrar este usuario?');
    }else if(modalType == 'access_room'){
        $(modal).find('.modal-dialog').removeClass('modal-lg');
        $(modal).find('.modal-dialog').addClass('modal-sm');
        $("#modalBodyAdmin").html('¿Desea activar este usuario?');
    }

});