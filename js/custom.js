$(document).ready(function () {

    $(".nav-icon").click(function (event) {
        $(this).toggleClass('active');
        $(".side-nav").toggleClass('active');
        $(".nav-text").toggleClass('active');//text menu
        $(".side-nav-overlay").toggleClass('active');
    });

    $(".side-nav-overlay").click(function (event) {
        $(".side-nav-overlay").removeClass('active');
        $(".side-nav").removeClass('active');
        $(".nav-text").removeClass('active');//text menu
        $(".nav-icon").removeClass('active');
    });

    $(".btn__filtr").click(function () {
        $('.btn__filtr').removeClass('active');
        $(this).addClass('active');

        var filter = $(this).attr('data-filter')

        if (filter == 'vse'){
            $('.article').show(400);
        }else{
            $('.article').not('.'+filter).hide(400);
            $('.article').filter('.'+filter).show(600);
        }
    });


    new fullpage('#fullpage', {
        scrollOverflow: true,
        normalScrollElements: '.scrollable-content',
    }); 
    

});
