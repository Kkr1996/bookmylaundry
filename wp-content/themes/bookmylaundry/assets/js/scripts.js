jQuery(document).ready(function($){
    let directoryPath = book_my_laundry_object.template_directory_uri;
    jQuery('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        dots: false,
        arrows: false,
        loop: true,
    });
    jQuery('.top-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        dots: false,
        arrows: true,
        loop: true,
        prevArrow: '<img class="slick-prev" src="'+directoryPath+'/assets/icons/arrow-sm-left.svg" alt="Previous">',
        nextArrow: '<img class="slick-next" src="'+directoryPath+'/assets/icons/arrow-right.svg" alt="Next">',
    });
    jQuery('.testimonial_slider').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: false,
        dots: false,
        loop: true,
        arrows: true,
        prevArrow: '<img class="slick-prev" src="'+directoryPath+'/assets/icons/arrow-sm-left.svg" alt="Previous">',
        nextArrow: '<img class="slick-next" src="'+directoryPath+'/assets/icons/arrow-right.svg" alt="Next">',
    });
    $('.scroll-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    jQuery(document).on('click', ".clickable", function(){
        jQuery(".timeslot-city-switcher").toggle();
    });
    (function(){
        var words = [
            'Mumbai',
            'Punjab',
            'Patna',
            'Hyderabad',
            'Kanpur',
            ], i = 0;
        setInterval(function(){
            $('#changingword').fadeOut(function(){
                $(this).html(words[i=(i+1)%words.length]).fadeIn();
            });
        }, 3000);
          
    })();

    // Trigger left arrow click on left-arrow click
    $('.left-arrow').on('click', function() {
        $('.testimonial_slider').slick('slickPrev');
    });

    // Trigger right arrow click on right-arrow click
    $('.right-arrow').on('click', function() {
        $('.testimonial_slider').slick('slickNext');
    });

});
