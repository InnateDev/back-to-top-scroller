jQuery(document).ready(function($) {
    $('.scrollup').hide();
    // display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    }); 
    // scroll button click function
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    // add button to page
    $('body').append('<a href="#" class="scrollup">Scroll</a>');

});