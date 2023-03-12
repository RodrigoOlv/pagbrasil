export default function() {

    var header = $(".main-header");

    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 320) {
            header.addClass('bg-primary');
        } else {
            header.removeClass('bg-primary');
        }
    });

    $(window).on('load', function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 320) {
            header.addClass('bg-primary');
        } else {
            header.removeClass('bg-primary');
        }
    });

    $('.navbar-toggler').on('click', function() {
        $('.navbar-toggler i').toggleClass('fa-bars');
        $('.navbar-toggler i').toggleClass('fa-times');
    })
    
}