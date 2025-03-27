(function( $ ) {
    wp.customize('background_color_setting', function(value) {
        value.bind(function(newval) {
            $('body').css('background-color', newval);
        });
    });
})(jQuery);
