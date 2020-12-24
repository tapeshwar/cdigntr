$(document).ready(function () {

    $('#user_login_form').validate({
        /* rules:{
            "username":"required",
            "password":"required"
        },
        messages:{
            "username":"Please enter username",
            "password":"Please enter password"

        } */
        submitHandler:function(form){
            //var btn = $('#user_login_form').loading('set');
            $.ajax({
                type: "POST",
                url: $('#user_login_form').attr('data-url'),
                data: new FormData($('#user_login_form')[0]),
                contentType: false,
				cache: false,
				processData: false,
                dataType: "json",
                success: function (r) {
                    //alert(r.status);
                    if(r.status=='success'){
                        window.location.href=r.url;
                    }else{
                        console.log(r.status);
                    }
                    //return false;
                }
            }).always(function () {
                btn.loading('reset');
            });
            return false;

        }
    });



    $(document).on('click', '.user_register', function () {
        
        //$('.load-overlay').show();
        //$('#modal-placeholder').html('');
        var actionUrl = $(this).attr('data-url');
        alert(actionUrl);
        $('#modal-placeholder').load(actionUrl, function () {
            //$('.load-overlay').hide();
            $("#myModalHorizontal").modal();
            //$('.update-worker-error').remove();
    
            /* $("#update-worker-form").validate({
                submitHandler: function (form) {
                    var btn = $('#update-worker-form .btn_submit').loading('set');
                    $.ajax({
                        url: $(form).attr('data-url'),
                        dataType: "json",
                        type: "post",
                        data: new FormData($('#update-worker-form')[0]),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (d) {
                            if (d.status == 'success') {
                                window.location.reload();
                            } else {
                                var err = '';
                                $.each(d.message, function (key, value) {
                                    $.each(value, function (k, v) {
                                        err += v + '<br/>';
                                    });
                                });
                                $('#update-worker-form .btn_submit').before('<label class="error update-worker-error">' + err + '</label>');
                            }
                        }
                    }).always(function () {
                        btn.loading('reset');
                    });
                }
            }); */
        });
    });

});