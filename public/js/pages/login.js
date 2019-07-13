$(function(){



    $('#loginform').validate({
        rules: {

            mobile_no: {
                pattern: /^09[0-9]{9}/,
                required: true,
                remote:{
                    url:"/validate/mobile_no",
                    type:'POST',
                }
            }

        },
        messages:{
            mobile_no: {
                pattern: "شماره اشتباه وارد شده است",
                remote: "شماره همراه یافت نشد",
                required: "لطفا شماره همراه خود را وارد کنید"
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter( element.parent("div").children().last() )
        },
        errorElement :'small',
        success: function(label) {
            $(label).prev().addClass("has-success").removeClass('has-danger');
        },
        highlight: function(element, errorClass) {
            $(element).addClass("has-danger").removeClass('has-success');
            if($(element).attr('id')=='captcha' && $(element).val().length==5 ){
                d = new Date();
                $('#captchaimage').attr("src", "/captcha?"+d.getTime());
            }
        },

        submitHandler: function() {

            $.ajax({
                type: "POST",
                data: $('#loginform').serialize(),
                dataType: "json",
                encode:true,
                success: function( response ) {
                    $("#spinner").hide(10);
                    if (response.status=="numOK") {
                        $("#loginform").slideUp();
                        $("#passform").fadeIn();

                    }
                    else {
                        notify('error',"خطا",response.errors);
                        d = new Date();
                        $("#captchaimage").attr("src", "/captcha?"+d.getTime());
                    }
                }
            });

        },
    });
    $('#passform').validate({
        rules: {

            password: {
                required: true,

            }

        },
        messages:{
            password: {
                required: "لطفا رمز  را وارد کنید"
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter( element.parent("div").children().last() )
        },
        errorElement :'small',
        success: function(label) {
            $(label).prev().addClass("has-success").removeClass('has-danger');
        },
        highlight: function(element, errorClass) {
            $(element).addClass("has-danger").removeClass('has-success');
            if($(element).attr('id')=='captcha' && $(element).val().length==5 ){
                d = new Date();
                $('#captchaimage').attr("src", "/captcha?"+d.getTime());
            }
        },

        submitHandler: function() {

            $.ajax({
                type: "POST",
                data: $('#passform').serialize(),
                dataType: "json",
                encode:true,
                success: function( response ) {
                    $("#spinner").hide(10);
                    if (response.status=="logOK") {
                        location.reload();

                    }
                    else {
                        notify('error',"خطا",response.errors);
                        d = new Date();
                        $("#captchaimage").attr("src", "/captcha?"+d.getTime());
                    }
                }
            });

        },
    });

});
$('#loginform').on('submit',function(e){
    e.preventDefault();
});
