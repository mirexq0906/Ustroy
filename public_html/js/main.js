$(document).on("scroll", window, function () {
    if ($(window).scrollTop() > 40) 
    {
        $('.menu-fixed').css({
        	'transform' : 'translateY(0%)',
        });
    }
    else if ($(window).scrollTop() < 100)
    {
        $('.menu-fixed').css({
        	'transform' : 'translateY(-100%)',
        });
    }
    });
$(document).ready(function () {
        $('.menu-static').css({
            'transform' : 'translateY(0%)',
        });
    });
$(document).ready(function () {
    $('.accordion-title').click(function() {
        $(this).next().slideToggle();
        $(this).find('.fas').toggleClass('accordion-rotate');
    });
});
$(document).ready(function () {
    var slidenum = 0;
    var navBtnId = 0;
    var $adderSpan = '';
    $('.gallery_viewport > li').each(function() {
    var src = $(this).children('img').attr("src");
    $adderSpan += '<div class ="gallery-controls"><div class ="border-controls-gallery"><img src = "'+ src +'" ></div></div>';
    });
    $('<div class ="block-gallery-controls revealator-slideup revealator-once">' + $adderSpan + '</div>').appendTo('.section-gallery');
    $('.gallery-controls').click(function() {
    navBtnId = $(this).index();
    if (navBtnId != slidenum) {
        $('.gallery_viewport > li').eq(slidenum).fadeOut(300);
        $('.gallery_viewport > li').eq(navBtnId).fadeIn(300);
        slidenum = navBtnId;
        $('.gallery-cp').text(slidenum + 1);
    }
    });
    $('.gallery_viewport > li').hide().eq(0).show();
    var slidesum = $('.gallery_viewport').children().length;
    $('.next-gallery').click(function () {
    $('.gallery_viewport > li').eq(slidenum).fadeOut(300);
    if(slidenum == slidesum - 1) {
    slidenum = 0
    } else {
    slidenum++
    }
    $('.gallery_viewport > li').eq(slidenum).fadeIn(300);
    $('.gallery-cp').text(slidenum + 1);
    });
    $('.prev-gallery').click(function () {
    $('.gallery_viewport > li').eq(slidenum).fadeOut(300);
    if(slidenum == 0 ) {
    slidenum = slidesum - 1
    } else {
    slidenum--
    }
    $('.gallery_viewport > li').eq(slidenum).fadeIn(300);
    $('.gallery-cp').text(slidenum + 1);
    });
    $('.summ-gallery').text(slidesum);
});