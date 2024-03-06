'use strict'

import * as f from './function.js';

$(document).ready(function () {
  const $window = $(window);
  const header = $("#header") // 헤더
  const fixBtns = $(".fix_btns"); //우측 고정 버튼

  // Match Height
  $(".match_h > *").matchHeight();

  // Feather Icon
  feather.replace();

  // Nice Select
  $('.ncSelect').niceSelect();

  // Main Visual
  const mainVisualTarget = '.main_visual .swiper-container';
  const mainVisualOptions = {
    slidesPerView: 1,
    loop: true,
    loopAdditionalSlides : 1,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    // autoplay: {
    //   delay: 3000,
    // },
    speed: 1000,
    centeredSlides: true,
    on: {
      slideChangeTransitionEnd : function() {
        f.textTyping(".main_visual .swiper-slide-active .typing-txt");
      },
    },
    // pagination: {
    //   el: `${mainVisualTarget} .pagination`,
    // },
  };
  const mainVisualSlider = f.slider(mainVisualTarget, mainVisualOptions);


  // Mouse Scroll
  $window.on('scroll', function(){
    let windowScrollTop = $window.scrollTop();
    let scrolled = windowScrollTop >= 100;
    
    if(header.hasClass('main_header') ) {
      if(scrolled) {
        header.removeClass('type2', scrolled);
      } else {
        header.addClass('type2', scrolled);
      }
    }
    fixBtns.toggleClass('show', scrolled);

    f.scrollVisible(".main_dalton", function(){
      $(".main_dalton-img-item.item1").css({"transform": `translate3d(0, -${windowScrollTop / 6}px, 0)`});
      $(".main_dalton-img-item.item2").css({"transform": `translate3d(0, -${windowScrollTop / 3}px, 0)`});
      $(".main_dalton-img-item.item3").css({"transform": `translate3d(0, -${windowScrollTop / 10}px, 0)`});
    });
  });
});