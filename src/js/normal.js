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
  const mainVisualSlideCount = $(mainVisualTarget).find('.swiper-slide').length;

  if(mainVisualSlideCount > 1) {
    const mainVisualOptions = {
      slidesPerView: 1,
      loop: true,
      loopAdditionalSlides : 1,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 3500,
      },
      speed: 1500,
      centeredSlides: true,
      on: {
        slideChangeTransitionEnd : function() {
          f.textTyping(".main_visual .swiper-slide-active .typing-txt");
          $(".main_visual .swiper-slide-active .txt-box .t2").addClass('show');
        },
      },
      // pagination: {
      //   el: `${mainVisualTarget} .pagination`,
      // },
    };
    const mainVisualSlider = f.slider(mainVisualTarget, mainVisualOptions);
  } else {
    f.textTyping(".main_visual .swiper-slide .typing-txt");
    $(".main_visual .swiper-slide .txt-box .t2").addClass('show');
  }


  $("#dalton_exp-beforeAfter-slider").on("input change", (e)=>{
    const sliderPos = e.target.value;
    // Update the width of the foreground image
    $('.foreground-img').css('width', `calc(${sliderPos}%)`)
    // Update the position of the slider button
    if ($(window).width() > 767) {
      $('.slider-button').css('left', `calc(${sliderPos}% - 23px)`)
    } else {
      $('.slider-button').css('left', `calc(${sliderPos}% - 13px)`)
    }
  });

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
  });

  // Best Review Slide
  const reviewTarget = '.review-best-slider';
  const reivewSlideCount = $('.review-best-slide').length;

  console.log(reivewSlideCount)

  if (reivewSlideCount > 1) {
    const reviewOptions = {
      slidesPerView: "auto",
      spaceBetween: 100,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      loop: true,
      loopAdditionalSlides: 1,
      accessibility: true,
      speed: 1000,
      pagination: {
        el: ".reivew-best-slpage",
        type: "fraction",
      },
      navigation: {
        nextEl: ".review-best-slbtn.next",
        prevEl: ".review-best-slbtn_prev",
      },
    };
    const reviewSlider = f.slider(reviewTarget, reviewOptions);
  } else {
    $('.review-best').addClass('none');
  }
});