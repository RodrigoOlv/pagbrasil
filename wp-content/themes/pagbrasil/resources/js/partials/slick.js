export default function() {

    $('.gallery-carousel').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });

    if ( window.innerWidth <= 760 ) {
        $('.posts-carousel').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000
        });
    }
}