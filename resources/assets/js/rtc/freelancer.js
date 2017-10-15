(function($) {
    "use strict"; // Start of use strict
    function run() {
        // Smooth scrolling using jQuery easing
        //*/
        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function() {
            $('.navbar-collapse').collapse('hide');
        });
        //*/
        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
            target: '#mainNav',
            offset: 54
        });
        //*/
        // Collapse the navbar when page is scrolled
        $(window).scroll(function() {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        });
        //*/

        // Floating label headings for the contact form
        $(function() {
            $("body").on("input propertychange", ".floating-label-form-group", function(e) {
                $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
            }).on("focus", ".floating-label-form-group", function() {
                $(this).addClass("floating-label-form-group-with-focus");
            }).on("blur", ".floating-label-form-group", function() {
                $(this).removeClass("floating-label-form-group-with-focus");
            });
        });
        //*/
        $(document).click(function(e) {
            var container = $("nav.navbar>container");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('.navbar-collapse.collapse').hasClass('show')) {
                    $('.navbar-collapse.collapse').collapse('hide');
                }
            }
        });

    }

    function Load_with_axios($this) {
        if ($($this).data('href') + '/' != window.location.href) {
            event.preventDefault();
            axios.get($($this).data('href'))
                .then(function(response) {
                    $("html, body").stop().animate({ scrollTop: 0 }, 350, 'swing');
                    $('.nav-item.active , .nav-link.active,.dropdown-item.active').removeClass('active');
                    if ($($this).hasClass('dropdown-item')) {
                        $($this).parent().parent().find('.nav-link.dropdown-toggle').addClass('active');
                        $($this).addClass('active');
                    } else {
                        $($this).addClass('active');
                    }
                    $('#content').stop().animate({ opacity: 0 }, 200, 'swing', function() {
                        $('#content').html(response.data.html).animate({ opacity: 1 }, 200, 'swing', function() {
                            if (response.data.run) RTC[response.data.run]();
                        })
                    });
                    document.getElementsByTagName("title").innerHTML = response.data.title;
                    window.history.pushState(response.data, "", $($this).data('href'));
                })
                .catch(function(error) {});
            return false;
        } else if ($this.hash) {
            var target = $($this.hash);
            target = target.length ? target : $('[name=' + $this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        } else {
            var target = $($this.href.replace(window.location.href, ''));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: (target.first().offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    }

    function contact_me() {
        $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
            preventSubmit: true,
            submitError: function($form, event, errors) {
                // additional error messages or events
            },
            submitSuccess: function($form, event) {
                event.preventDefault(); // prevent default submit behaviour
                // get values from FORM
                var name = $("input#name").val();
                var email = $("input#email").val();
                var phone = $("input#phone").val();
                var message = $("textarea#message").val();
                var firstName = name; // For Success/Failure Message
                // Check for white space in name for Success/Fail message
                if (firstName.indexOf(' ') >= 0) {
                    firstName = name.split(' ').slice(0, -1).join(' ');
                }
                $this = $("#sendMessageButton");
                $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
                $.ajax({
                    url: "././mail/contact_me.php",
                    type: "POST",
                    data: {
                        name: name,
                        phone: phone,
                        email: email,
                        message: message
                    },
                    cache: false,
                    success: function() {
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>Your message has been sent. </strong>");
                        $('#success > .alert-success')
                            .append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                    error: function() {
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                    complete: function() {
                        setTimeout(function() {
                            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                        }, 1000);
                    }
                });
            },
            filter: function() {
                return $(this).is(":visible");
            },
        });

        $("a[data-toggle=\"tab\"]").click(function(e) {
            e.preventDefault();
            $(this).tab("show");
        });

        /*When clicking on Full hide fail/success boxes */
        $('#name').focus(function() {
            $('#success').html('');
        });
    }
    module.exports = {
        contact_me: contact_me,
        run: run,
        Load_with_axios: Load_with_axios
    }
})(jQuery); // End of use strict