
$(document).ready(function() {
    // $('.slick-courses-pop').slick({
    //     dots: true,
    //     infinite: true,
    //     slidesToShow: 4,
    //     slidesToScroll: 4
    // });
    // $('.slick-courses-new').slick({
    //     dots: true,
    //     infinite: true,
    //     slidesToShow: 4,
    //     slidesToScroll: 4
    // });
    //
    // $(".tabswithslick").on("click", function(){
    //     $('.slick-courses-pop').slick('refresh');
    //     $('.slick-courses-new').slick('refresh');
    // });

    $('#navPandNContent .slick').slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
    });

    $(".tabswithslick").on("click", function(){
        var target = $(this).data('idtarget');
        $( target + ' .slick').slick('refresh');
    });
});