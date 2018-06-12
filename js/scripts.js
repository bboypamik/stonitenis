$(document).ready(function () {
    //$('.test-popup-link').magnificPopup({type: 'image'});


    $('.navbar-toggler-icon').click(function (e) {
        if( $('.navbar').hasClass('white') ) {
            $('.navbar').removeClass('smaller');
            $('.navbar').removeClass('white');
        }
        else{
            $('.navbar').addClass('smaller');
            $('.navbar').addClass('white');
        }
    });

    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
    });

    $('.slide-section').click(function (e) {
        var linkHref = $(this).attr('href');
        e.preventDefault();
        console.log(linkHref);
        $('html, body').animate({
            scrollTop: $(linkHref).offset().top - 50
        })
    });

    $('.carousel').carousel({
        interval: 4000
    });

    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 0,
            header = document.querySelector("nav");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
});


new WOW().init();

