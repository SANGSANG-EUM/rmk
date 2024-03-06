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

  // Mouse Scroll
  

  $window.on('scroll', function(){
    let scrolled = $window.scrollTop() >= 100;
    
    if(header.hasClass('main_header') ) {
      if(scrolled) {
        header.removeClass('type2', scrolled);
      } else {
        header.addClass('type2', scrolled);
      }
    }
    fixBtns.toggleClass('show', scrolled);
  });

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
});