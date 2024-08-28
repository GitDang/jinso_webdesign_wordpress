// JavaScript Document

//繝医ャ繝� 繧ｹ繝ｩ繧､繝繝ｼ
window.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.swiper_mv', {
          pagination: {
              el: '.swiper-pagination',
              type: 'bullets',
              clickable: true,
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev'
          },
          loop: true,
          speed: 1200,
          autoplay: {
          delay: 12000,
          },
    });
  }, false);
  
  $(function() {
      var swiper2 = new Swiper('.swiper2', {
          pagination: {
              el: '.swiper-pagination',
              type: 'bullets',
          },
          navigation: {
              nextEl: '.next1',
              prevEl: '.prev1',
          },
          loop: true,
          speed: 1200,
          autoplay: {
              delay: 5000,
          },
          slidesPerGroup: 2,
          slidesPerView: 2,
          spaceBetween: 20,
          breakpoints: {
              768: {
                  slidesPerGroup: 3,
                  slidesPerView: 3,
                  spaceBetween: 40,
              },
          },
      });
  });
  
  
  //product tab
  $(function(){
      var mdbody = $('.md-body'),
          mdface = $('.md-face'),
          tdbody = $('.td-body'),
          tdface = $('.td-face'),
          tdhead = $('.td-head'),
          mdb = $('.mdb'),
          mdf = $('.mdf'),
          tdb = $('.tdb'),
          tdf = $('.tdf'),
          tdh = $('.tdh'),
          all = $('.all'),
          list = $('.pro_item ul li')
      
      mdbody .click(function(){
          list .css("display","none");
          mdb .css("display","block");
      })
      mdface .click(function(){
          list .css("display","none");
          mdf .css("display","block");
      })
      tdbody .click(function(){
          list .css("display","none");
          tdb .css("display","block");
      })
      tdface .click(function(){
          list .css("display","none");
          tdf .css("display","block");
      })
      tdhead .click(function(){
          list .css("display","none");
          tdh .css("display","block");
      })
      
      all .click(function(){
      list .css("display","block");
      });
              
  });