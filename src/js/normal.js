'use strict'

import * as f from './function.js';

$(document).ready(function () {
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
      init : function() {
        f.textTyping(".main_visual .swiper-slide-active .typing-txt");
      },
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