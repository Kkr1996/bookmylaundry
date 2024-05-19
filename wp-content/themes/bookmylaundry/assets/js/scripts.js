jQuery(document).ready(function($){
    let directoryPath = book_my_laundry_object.template_directory_uri;
    jQuery('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        dots: false,
        arrows: false,
        loop: true,
        autoplaySpeed: 7000,
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
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        dots: false,
        loop: true,
        arrows: true,
        prevArrow: '<div class="left"><img class="slick-prev" src="'+directoryPath+'/assets/icons/arrow-sm-left.svg" alt="Previous"></div>',
        nextArrow: '<div class="right"><img class="slick-next" src="'+directoryPath+'/assets/icons/arrow-right.svg" alt="Next"></div>',
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
            'Noida Sector 29',
            'Noida Sector 76',
            'Alpha 2 Gr. Noida',
            'Noida Sector 104',
            'Dwarka',
            'Vyapar Kendra Gurgaon',
            'Ludhiana Trade Tower Ludhiana',
            'Chander nagar Ghaziabad',
            ], i = 0;
        setInterval(function(){
            $('#changingword').fadeOut(function(){
                $(this).html(words[i=(i+1)%words.length]).fadeIn();
            });
        }, 2000);
          
    })();

    // Trigger left arrow click on left-arrow click
    $('.left-arrow').on('click', function() {
        $('.testimonial_slider').slick('slickPrev');
    });

    // Trigger right arrow click on right-arrow click
    $('.right-arrow').on('click', function() {
        $('.testimonial_slider').slick('slickNext');
    });

    var video = $('#background-video').get(0);
    video.play();
    video.playbackRate = 0.4

    $(window).scroll(function() {
        // Check if the user has scrolled 500px from the top
        if ($(this).scrollTop() > 600) {
            // If so, display the scroll-to-top button
            $('.topto').fadeIn(500);
        } else {
            // Otherwise, hide the scroll-to-top button
            $('.topto').fadeOut();
        }
    });

});


jQuery(document).ready(function($) {
    // Initially collapse all accordion items except the first one
    $('.accordion-item').not(':first').find('.accordion-content').hide();
    $('.accordion-item:first').find('.accordion-title').addClass('active').next().show();

    // Toggle accordion on click
    $('.accordion-title').click(function() {
        // Toggle active class for the clicked item
        $(this).toggleClass('active').next('.accordion-content').slideToggle();

        // Collapse other accordion items
        $('.accordion-title').not(this).removeClass('active');
        $('.accordion-content').not($(this).next('.accordion-content')).slideUp();
    });

    $('#see-all-btn').click(function() {
        // Redirect to the FAQs page
        window.location.href = 'faqs-page.html';
    });

    // Show default tab content
    $('.tab-content .pricing-card.active').show();

    // Handle tab click
    $('.tab .item').click(function() {
        $('.tab .item').removeClass('active');
        $(this).addClass('active');
        var index = $(this).index();
        $('.tab-content .pricing-card').removeClass('active').hide();
        $('.tab-content .pricing-card').eq(index).addClass('active').show();
    });

    var header = $('#masthead');
    var headerOffset = header.offset().top;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > headerOffset) {
            header.addClass('sticky');
        } else {
            header.removeClass('sticky');
        }
    });
});
