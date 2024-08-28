// JavaScript Document

$(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});
$(function() {
    $('.gNaviChildSp').hide();
    $('.gNaviListSp > li').on('click', function() {
        $(this).children('.gNaviChildSp').slideToggle(300);
        $(this).toggleClass('active');
     });
    $('.gNaviChildSp li').click(function() {
        $('.hamburger').toggleClass('active');
        if ($('.hamburger').hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});


// PC繧ｰ繝ｭ繝ｼ繝舌Ν繝｡繝九Η繝ｼ
$(function() {
    var offset = $('.g_line').offset();

    $(window).scroll(function () {
        if ($(window).scrollTop() > offset.top) {
            $('.g_line').addClass('fixed');
        } else {
            $('.g_line').removeClass('fixed');
        }
    });
});
$(function() {
    $('.gNaviChild').hide();
    $('.gothic > li').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');    
        } else {
            $('.gothic li').removeClass('active');
            $(this).addClass('active');    
            $('.gNaviChild').hide();
        }
        $('.gNaviChild').slideUp(300);
        $('.active .gNaviChild').slideDown(300);
    });
});


//繝医ャ繝励∈謌ｻ繧�
$(function(){
    var $btn = $('.totop');
    $btn.click(function(){
    $('html, body').animate({'scrollTop': 0}, 300);
    return false;
    });
});