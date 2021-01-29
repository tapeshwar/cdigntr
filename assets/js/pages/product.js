$(document).ready(function () {

    $('#create_product_form').validate({
    
        submitHandler:function(form){
            //var btn = $('#user_login_form').loading('set');
            $.ajax({
                type: "POST",
                url: $('#create_product_form').attr('data-url'),
                data: new FormData($('#create_product_form')[0]),
                contentType: false,
				cache: false,
				processData: false,
                dataType: "json",
                success: function (r) {
                    //alert(r.status);
                    if(r.status=='success'){
                        window.location.reload();
                    }
                    //return false;
                }
            }).always(function () {
                //btn.loading('reset');
            });
            return false;

        }
    });

});