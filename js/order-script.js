jQuery(document).ready(function() {
    /*
    Contact form
    */
    $('.contact-form form input[type="text"], .contact-form form textarea').on('focus', function() {
        $(this).removeClass('has-danger');
        $(this).removeClass('form-control-danger');
    });
    $('.contact-form form').submit(function(e) {
        e.preventDefault();
        $('.contact-form form .form-group').removeClass('has-danger');
        $('.contact-form form input[type="text"], .contact-form form textarea').removeClass('form-control-danger');
        var postdata = $('.contact-form form').serialize();
        $.ajax({
            type: 'POST',
            url: 'inc/order.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.emailMessage != '') {
                    $('.contact-form form .group-email').addClass('is-invalid');
                    // $('.contact-form form .contact-email').addClass('form-control-danger');
                    $('.contact-email').val("");
                    $('.contact-email').attr("placeholder", "Please add a valid email!");
                }
                if(json.nameMessage != '') {
                    $('.contact-form form .group-name').addClass('is-invalid');
                    // $('.contact-form form .contact-name').addClass('form-control-danger');
                }
                if(json.productNameMessage != '') {
                    $('.contact-form form .group-productName').addClass('is-invalid');
                    // $('.contact-form form .contact-productName').addClass('form-control-danger');
                }
                if(json.sizeMessage != '') {
                    $('.contact-form form .group-size').addClass('is-invalid');
                    // $('.contact-form form .contact-size').addClass('form-control-danger');
                }
                if(json.messageMessage != '') {
                    $('.contact-form form .group-message').addClass('is-invalid');
                    // $('.contact-form form textarea').addClass('form-control-danger');
                }
                if(json.antispamMessage != '') {
                    $('.contact-form form .group-antispam').addClass('is-invalid');
                    // $('.contact-form form .contact-antispam').addClass('form-control-danger');
                }
                if(json.emailMessage == '' && json.nameMessage == '' && json.productNameMessage == '' && json.sizeMessage == '' && json.messageMessage == '' && json.antispamMessage == '') {
                    $('.contact-form form').fadeOut('fast', function() {
                        $('.contact-form').append('<div class="alert alert-success" role="alert"><h4 class="alert-heading">Order received!</h4><p><strong>Thank you for choosing us! We will get back to you very soon.</strong></p></div>');
                    });
                }
            }
        });
    });

});
