$(() => {

    document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    $('.rebate-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplaySpeed: 0,
        speed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        autoplay: true,
        cssEase: 'linear',
    });

    $('.brands-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplaySpeed: 0,
        speed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        autoplay: true,
        cssEase: 'linear',
        touchThreshold: 5000,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    variableWidth: false,
                    slidesToShow: 5,
                }
            }
        ]
    });

    $('.features-slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        cssEase: 'linear',
        centerMode: true,
        centerPadding: "190px",
        touchThreshold: 5000,
        initialSlide: 1,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.next-arrow'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    centerPadding: "10px",
                    slidesToShow: 1,
                }
            }
        ]
    });    

    $('.testimonials-slider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        autoplaySpeed: 5000,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        centerMode: true,
        centerPadding: "200px",
        touchThreshold: 5000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    centerPadding: "100px",
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    centerPadding: "10px",
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    $('.banner-mobile-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
        autoplay: true,
        cssEase: 'linear',
        touchThreshold: 5000,
    });

    $(window).on('scroll', () => {
        if ($(this).scrollTop() >= 600) {
            $('#back-top').fadeIn(300);
        } else {
            $('#back-top').fadeOut(300);
        }
    });

    $('#back-top').on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 100);
        return false;
    });

});