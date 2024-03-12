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

  // Mobile Menu
  const mobileMenu_open = $(".mo-menu_open");
  const mobileMenu_close = $(".mo-menu_close");
  const mobileMenu = $(".mo-menu");

  const mobileNavi_dp1 = $(".mo-navi > ul > li > a");
  let mobileNavi_dp2;

  mobileMenu_open.on('click', function(){
    mobileMenu.fadeIn(300);
  });

  mobileMenu_close.on('click', function(){
    mobileMenu.fadeOut(300);
  });

  mobileNavi_dp1.on('click', function(){
    mobileNavi_dp2 = $(this).siblings("ul.depth2");

    mobileNavi_dp2.slideToggle(300).closest("li").addClass('active').siblings().removeClass('active').find("ul.depth2").slideUp(300);
  });


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

  //Product View Picture
  const productViewPictureTarget2 = '.product-v_pic .small .swiper-container';
  const productViewPictureOptions2 = {
    slidesPerView: 4,
    spaceBetween: 8,
    autoplay: {
      delay: 3500,
    },
    speed: 1000,
    navigation: {
      prevEl: `${productViewPictureTarget2} .prev-btn`,
      nextEl: `${productViewPictureTarget2} .next-btn`,
    },
    watchSlidesProgress: true,
  };
  const productViewPictureSlider2 = f.slider(productViewPictureTarget2, productViewPictureOptions2);

  const productViewPictureTarget = '.product-v_pic .big .swiper-container';
  const productViewPictureOptions = {
    slidesPerView: 1,
    autoplay: {
      delay: 3500,
    },
    speed: 1000,
    // pagination: {
    //   el: `${productViewPictureTarget} .pagination`,
    // },
    thumbs: {
      swiper: productViewPictureSlider2?.swiper,
    },
  };
  const productViewPictureSlider = f.slider(productViewPictureTarget, productViewPictureOptions);

  // Best Review Slide
  const reviewTarget = '.review-best-slider';
  const reivewSlideCount = $('.review-best-slide').length;

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
});