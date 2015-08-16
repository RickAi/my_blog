(function ($) {
    $(function () {

        $(document)
            .ready(function () {


                $('.special.cards .image').dimmer({
                    on: 'hover'
                });

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function () {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function () {
                            $('.fixed.menu').transition('fade out');
                        }
                    });

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item');

                $('.ui.accordion')
                    .accordion()
                ;

            });

    }); // end of document ready
})(jQuery); // end of jQuery name space