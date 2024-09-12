// JavaScript Document

jQuery(function() {
    jQuery('.hamburger').click(function() {
        jQuery(this).toggleClass('active');
        if (jQuery(this).hasClass('active')) {
            jQuery('.globalMenuSp').addClass('active');
        } else {
            jQuery('.globalMenuSp').removeClass('active');
        }
    });
});
jQuery(function() {
    jQuery('.gNaviChildSp').hide();
    jQuery('.gNaviListSp > li').on('click', function() {
        jQuery(this).children('.gNaviChildSp').slideToggle(300);
        jQuery(this).toggleClass('active');
     });
    jQuery('.gNaviChildSp li').click(function() {
        jQuery('.hamburger').toggleClass('active');
        if (jQuery('.hamburger').hasClass('active')) {
            jQuery('.globalMenuSp').addClass('active');
        } else {
            jQuery('.globalMenuSp').removeClass('active');
        }
    });
});

jQuery(function() {
    jQuery('.product-information-instagram-image a').click(function(event) {
        event.preventDefault();
        jQuery('.product-information-instagram-item').removeClass('active');
        jQuery(this).parents('.product-information-instagram-item').addClass('active');
    });
    jQuery('.product-information-close-modal').click(function(event) {
        event.preventDefault();
        jQuery('.product-information-instagram-item').removeClass('active');
    });
    jQuery('.product-information-instagram-modal').click(function(event) {
        event.preventDefault();
        var dataTarget = jQuery(event.target);
        if (dataTarget.hasClass('product-information-instagram-modal-window')) {
            jQuery('.product-information-instagram-item').removeClass('active');
        }
    });
});

// PC繧ｰ繝ｭ繝ｼ繝舌Ν繝｡繝九Η繝ｼ
jQuery(function() {
    var offset = jQuery('.section-menu').offset();
    jQuery(window).scroll(function () {
        if (offset) {
            if (jQuery(window).scrollTop() > offset.top) {
                jQuery('.section-menu').addClass('fixed');
            } else {
                jQuery('.section-menu').removeClass('fixed');
            }
        }
    });
});
jQuery(function() {
    jQuery('.gNaviChild').hide();
    jQuery('.gothic > li').click(function() {
        if (jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active');    
        } else {
            jQuery('.gothic li').removeClass('active');
            jQuery(this).addClass('active');
            jQuery('.gNaviChild').hide();
        }
        jQuery('.gNaviChild').slideUp(300);
        jQuery('.active .gNaviChild').slideDown(300);
    });
});


jQuery(function() {
    jQuery('.gNaviChild').hide();
    var parent = jQuery('.list-show-menu')
    jQuery('.list-menu-home .button-menu').click(function() {
        console.log(2222)
        var index  = jQuery(this).index();
        var showMenu = parent.children().eq(index);
        if (jQuery('.tab-show-detail-menu').hasClass('active')) {
            if (showMenu.hasClass('active')) {
                showMenu.removeClass('active');
                jQuery('.tab-show-detail-menu').removeClass('active');
            } else {
                jQuery('.gNaviChild').hide();
                jQuery('.list-show-menu > .gNaviChild').removeClass('active');
                showMenu.addClass('active');
            }
        } else {
            jQuery('.list-show-menu > .gNaviChild').removeClass('active');
            jQuery('.tab-show-detail-menu').addClass('active');
            jQuery('.gNaviChild').hide();
            showMenu.addClass('active');
        }
        jQuery('.gNaviChild').slideUp(300);
        jQuery('.active.gNaviChild').slideDown(300);
    });
});


jQuery(function() {
    jQuery('.navi-child-detail .navi-child-detail-title').click(function() {
        var linkImage = jQuery(this).parent().find('a').attr('href');
        if (linkImage) {
            window.location = linkImage
        }
    });
});

$(function(){
    var setImg = '.product-page-slide-inner';
    var fadeSpeed = 1300;
    var switchDelay = 2800;

    $(setImg).children('.product-slide-image').css({opacity:'0'});
    $(setImg + ' .product-slide-image:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

    var count = 1;
    var total = 0;
    $(setImg).children('.product-slide-image').each(function () {
        total++;
    });
    
    setInterval(function(){
        var index = 1;
        $(setImg).children('.product-slide-image').each(function () {
            if (count == index) {
                $(this).animate({opacity:'1'},fadeSpeed);
            } else {
                $(this).animate({opacity:'0'},fadeSpeed);
            }
            index++;
        });
        count = (count < total) ? (count + 1) : 1;
    },switchDelay);
});



//繝医ャ繝励∈謌ｻ繧�
jQuery(function(){
    var jQuerybtn = jQuery('.totop');
    jQuerybtn.click(function(){
    jQuery('html, body').animate({'scrollTop': 0}, 300);
    return false;
    });
});