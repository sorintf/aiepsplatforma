
$(document).ready(function() {
    $('.slick-courses-pop').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $('.slick-courses-new').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });

    $(".tabswithslick").on("click", function(){
        $('.slick-courses-pop').slick('refresh');
        $('.slick-courses-new').slick('refresh');
    });
});