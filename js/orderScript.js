jQuery(document).ready(function() {



    $("#name,#email,#productName,#size").on('focus', function() {

        $(this).removeClass('is-invalid');

    });





    $('#submit-btn').click(function(event){

        event.preventDefault();

        var $postdata = $("#placeOrderForm").serialize();

        console.log($postdata);

        $.ajax({

            type:'POST',

            url:'/inc/sendOrder.php',

            data: $postdata,

            dataType:'json',

            beforeSend: function(xhr){

                $('#submit-btn').attr("value","SENDING...");

                console.log('sending...');

            },

            success: function(response){

                console.log("response");

                if (response){

                    if(response['signal'] == 'ok'){

                        $("#msg").removeClass('alert-danger');

                        $("#msg").addClass('alert-success slideDown');

                        $("#msg .alert-heading").text('Order received!');

                        $("#msg > p").text(response['msg']);

                        $("input,textarea,select").val(function(){

                            return this.defaultValue;

                        });

                        console.log('response good...');

                    } else {

                        $("#msg").removeClass('alert-success');

                        $("#msg").addClass('alert-danger slideDown');

                        $("#msg .alert-heading").text('Oops!');

                        $("#msg > p").text("Please  fill in all the required fields: " + response['msg']);

                        var $inputValidator = response['selector'];

                        $($inputValidator).addClass("is-invalid");

                    }





                    if (response['signal'] == 'badEmail'){

                        $("#msg").removeClass('alert-success');

                        $("#msg").addClass('alert-danger slideDown');

                        $("#msg .alert-heading").text('Oops!');

                        $("#msg > p").text(response['msg']);

                        // $("input[name='firstName']").addClass("invalid");

                        console.log('response badEmail...');

                    }

                    

                    if (response['signal'] == 'badCheck'){

                        $("#msg").removeClass('alert-success');

                        $("#msg").addClass('alert-danger slideDown');

                        $("#msg .alert-heading").text('Oops!');

                        $("#msg > p").text(response['msg']);

                        // $("input[name='firstName']").addClass("invalid");

                        console.log('response badEmail...');

                    }



                    if (response['signal'] == 'badRobot'){

                        $("#msg").removeClass('alert-success');

                        $("#msg").addClass('alert-danger slideDown');

                        $("#msg .alert-heading").text('Oops!');

                        $("#msg > p").text(response['msg']);

                        // $("input[name='firstName']").addClass("invalid");

                        console.log('response badRobot...');

                    }

                }

            },

            error: function(){

                $("#msg").attr('class','alert-danger').text("Oups! There is an errror. Please try again!");

                console.log('error bad...');

            },

            complete: function(){

                $('#submit-btn').attr("value","SEND");

                console.log('complete...');

            }

        });

    });



});

