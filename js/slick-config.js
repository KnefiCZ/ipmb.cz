$(document).ready(function () {
    $( ".slick-gallery" ).each(function() {
        $(this).slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true,
            arrows: true,
            prevArrow: $(this).parent().find('.slider-gallery--prev'),
            nextArrow: $(this).parent().find('.slider-gallery--next'),
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 0.2,
                    slidesToScroll: 1,
                    arrows: true,
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                }
            }],
        });
    });

    $( ".slick-gallery-big" ).each(function() {
        $(this).slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 1.25,
            slidesToScroll: 1,
            variableWidth: true,
            arrows: true,
            prevArrow: $(this).parent().find('.slider-gallery--prev'),
            nextArrow: $(this).parent().find('.slider-gallery--next'),
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  arrows: true,
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  arrows: true,
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  arrows: true,
                }
              }],
          });
      });

    $('.slick-item').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      variableWidth: true,
      arrows: true,
      prevArrow: '.slider-item--prev',
      nextArrow: '.slider-item--next',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }],
    });

  });