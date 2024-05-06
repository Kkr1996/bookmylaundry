jQuery(document).ready(function($){
    jQuery('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        dots: false,
        arrows: false,
        loop: true
    });
    jQuery('.top-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        dots: false,
        arrows: true,
        loop: true
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

});