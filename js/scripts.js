$(document).ready(function () {
    $('.test-popup-link').magnificPopup({type: 'image'});


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
