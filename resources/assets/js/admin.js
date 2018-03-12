(function($) {
    "use strict"; // Start of use strict
    function run() {
        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function() {
            $('.navbar-collapse').collapse('hide');
        });

        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
            target: '#mainNav',
            offset: 54
        });

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

        $(document).click(function(e) {
            var container = $("nav.navbar>container");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('.navbar-collapse.collapse').hasClass('show')) {
                    $('.navbar-collapse.collapse').collapse('hide');
                }
            }
        });
    }
    module.exports = {
        run: run,
    }
})(jQuery); // End of use strict