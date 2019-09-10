
(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('#frm_login').on('submit',function(event){
        var check = true;
	    event.preventDefault();
        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        if(check)
        {
            var e = $('#email').val();
            var p = $('#pass').val();
            var path = $("#path").val();
            $.ajax
            ({
                ///Get the asset properties
                url:path,
                type:'POST',
                data: {email: e, pass : p},
                success: function(result){
                    var arr =jQuery.parseJSON(result);
                    var status = arr['status'];
                    var path = arr['path'];
                    if(status)
                    {
                        $(".login100-form-btn").html('Signing In ...');
                        setTimeout('window.top.location.replace(\''+path+'\'); ',1000);
                    }
                    else
                    {
                        $("#error").fadeIn(1000, function(){      
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Login Invalid </div>');
                        });
                    }			
                }
            });
        }
        return check;
    });


    $('#frm_register').on('submit',function(event){
        var check = true;
	    event.preventDefault();
        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        if(check)
        {
            var name = $('#name').val();
            var email = $('#email').val();
            var user_name = $('#user_name').val();
            var password = $('#password').val();
            var conf_password = $('#conf_password').val();
            var path = $("#path").val();
            $.ajax
            ({
                ///Get the asset properties
                url:path,
                type:'POST',
                data: {name:name,email: email, user_name : user_name, password:password, conf_password:conf_password},
                success: function(result){
                    var arr =jQuery.parseJSON(result);
                    var status = arr['status'];
                    var path = arr['path'];
                    if(status)
                    {
                        $(".login100-form-btn").html('Loading...');
                        setTimeout('window.top.location.replace(\''+path+'\'); ',1000);
                    }
                    else
                    {
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Registration Invalid </div>');
                        });
                    }
                }
            });
        }
        return check;
    });

    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else if($(input).attr('name') == 'conf_password')
        {
            if($('input#password').val() != $('input#conf_password').val())
            {
                return false; 
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);
