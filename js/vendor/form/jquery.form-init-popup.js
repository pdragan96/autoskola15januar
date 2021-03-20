jQuery(function($) {
    //ORDER PACKAGE
    $('#form-default-01').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            tel: {
                required: true,
                number: true
            },
            email: {
                required: true,
                email: true
            },
            trainingProgram: {
                required: false,
            },
            message: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },
            tel: {
                required: "Please enter your phone"
            },
            email: {
                required: "Please enter your email"
            },
            message: {
                required: "Please enter your message"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"pdragan96@gmail.com",
                success: function() {
                    $('#success').fadeIn();
                    $( '#form-default-01' ).each(function(){this.reset();});
                     successfulSending();
                },
                error: function() {
                    $('#form-default-01').fadeTo( "slow", 0, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });

    //Driving School Education Course

     $('#form-default-02').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            address: {
                required: false,
            },
            dayPhone: {
                required: false,
            },
            dataMonth: {
                required: false,
            },
            dataDay: {
                required: false,
            },
            dataYear: {
                required: false,
            },
            radiosGender: {
                required: false,
            },
            email: {
                required: true,
                email: true
            },
            username: {
                required: true,
                 minlength: 2
            },
            password: {
                required: true,
                 minlength: 2
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },
            address: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter your email"
            },
            username: {
                required: "Please enter your username",
                minlength: "Your name must consist of at least 2 characters"
            },
            password: {
                required: "Please enter your password",
                minlength: "Your name must consist of at least 2 characters"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"pdragan96@gmail.com",
                success: function() {
                    $('#success').fadeIn();
                    $( '#form-default-02' ).each(function(){this.reset();});
                    successfulSending();
                },
                error: function() {
                    $('#form-default-02').fadeTo( "slow", 0, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
     function successfulSending(){
        var ttsuccessform = $('.successform');
        ttsuccessform.fadeIn(300);
        setTimeout(function(){
           ttsuccessform.hide(300);
        }, 2000);
    };
});
