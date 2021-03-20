jQuery(function($) {
    $('#contactform').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            tel: {
                required: true,
                number: true
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
            email: {
                required: "Please enter your email"
            },
            tel: {
                required: "Please enter your phone"
            },
            message: {
                required: "Please enter your message"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"js/vendor/form/contact-form.php",
                success: function() {
                      $('#success').fadeIn();
                       $( '#contactform' ).each(function(){this.reset();});
                       successfulSending();
                },
                error: function() {
                    $('#contactform').fadeTo( "slow", 0, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
     $('#contactform02').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            tel: {
                required: true,
                number: true
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
            email: {
                required: "Please enter your email"
            },
            tel: {
                required: "Please enter your phone"
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
                      $( '#contactform02' ).each(function(){this.reset();});
                      successfulSending();
                },
                error: function() {
                    $('#contactform02').fadeTo( "slow", 0, function() {
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