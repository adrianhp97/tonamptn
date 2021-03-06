
(function ($) {
    "use strict";
    /*==================================================================
    [ Form ]*/
    // $('#formPeserta').submit(function(){
    //     var id = $('#no_peserta').val();
    //     $.ajaxSetup({
    //         headers: {
    //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //       });
    //     $.ajax({
    //         url: '/register',
    //         type: 'post',
    //         data: {
    //             no_peserta: id
    //         },
    //         success: function(html, data) {
    //             if(data == 'false') {
    //                 document.getElementById("fail").style.color = "red";
    //                 document.getElementById("fail").innerHTML = 'Tidak ada no urut tersebut';
    //             }
    //         }
    //     });        
    // });

    $("#formPeserta").validate({
        rules: {
            no_peserta: {
                required: true,
                digits: true,
                maxlength: 5,
                remote: "/checkIfExist"
            }
        },
    
        submitHandler: function(form) {
            $.ajax({
                url: '/register',
                type: 'post',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: $(form).serialize(),
                success: function(data) {
                    var no_peserta = data[0]['no_peserta'];
                    window.location = '/' + no_peserta;
                }
            });
        }
    });
    

    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    });
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
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