<?php
include_once $_SERVER["DOCUMENT_ROOT"].'/common.php';

if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.eng.php');
?>

<!-- main { -->
<div id="main">
  <div class="main_sec main_visual">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/src/img/main_vs1.jpg" alt="" class="fitCover">

          <div class="txt-box">
            <div class="container">
              <div class="wrapper">
                <div class="inner">
                  <div class="t1">
                    <p class="typing-txt">Clearly showing the beauty of the world.</p>
                    <p class="typing"></p>
                  </div>
                  <p class="t2">RMK, specialized in color blindness correction eyewear for everyone</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main_sec main_dalton">
    <div class="main_sec-top">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <p class="content_title1">For children with color blindness, Dalton, <br/>color blindness correction sunglasses <br/>made by a researcher’s father.</p>
            <p class="content-text2">Dalton sunglasses <br/>The sky is <b>bluer</b>, the autumn leaves are <b>redder</b>, <br/>Chrysanthemums appear more <b>yellow</b>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="main_sec-ct">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <div class="main_dalton-images">
              <div class="round main_dalton-img-item item1">
                <img src="/src/img/main-dalton-img1.jpg" alt="">
              </div>
              <div class="main_dalton-img-item item2">
                <img src="/src/img/main-dalton-img2.jpg" alt="">
              </div>
              <div class="round main_dalton-img-item item3">
                <img src="/src/img/main-dalton-img3.jpg" alt="">
              </div>
            </div>
            <div class="main_dalton-info">
              <div class="dalton_logo">
                <img src="/src/img/dalton-text-d.svg" class="dalton-text-d" alt="d">
                <img src="/src/img/dalton-text.svg" class="dalton-text" alt="dalton">
              </div>

              <p class="content-text">RMK’s <b>color correction eyewear brand ‘Dalton’</b> <br/>was born from <b>John Dalton</b> of Daltonism.</p>

              <div class="dalton_proud">
                <div class="round-right dalton_proud-item">
                  <div class="icon">
                    <img src="/src/img/dalton_proud-icon1.png" alt="">
                  </div>
                  <div class="t1">First developed in Korea</div>
                  <div class="t2">These are color blindness correction glasses <br/>that were first developed <br/>with pure domestic technology.</div>
                </div>
                <div class="round-top dalton_proud-item">
                  <div class="icon">
                    <img src="/src/img/dalton_proud-icon2.png" alt="">
                  </div>
                  <div class="t1">Vivid Color</div>
                  <div class="t2">Reproduces more vivid colors <br/>when looking at objects.</div>
                </div>
                <div class="round-top-right dalton_proud-item">
                  <div class="icon">
                    <img src="/src/img/dalton_proud-icon3.png" alt="">
                  </div>
                  <div class="t1">Colored Sunglasses</div>
                  <div class="t2">As popular sunglasses, anyone can enjoy <br/>colored sunglasses.</div>
                </div>
              </div>

              <div class="dalton_exp">
                <p class="content_title1">Do you want to experience the effects of Dalton <br/>but have trouble getting out?</p>
                <p class="content-text3"><b>Compare the before and after</b> photos below <br/>and <b>enjoy an experience</b> you never felt before.</p>

                <div class="dalton_exp-beforeAfter">
                  <div class="background-img img"></div>
                  <div class="foreground-img img"></div>
                  <input type="range" min="0" max="100" value="50" class="slider" name="dalton_exp-beforeAfter-slider" id="dalton_exp-beforeAfter-slider">
                  <div class="slider-button">
                    <span class="slider-circle"></span>
                  </div>
                </div>

                <div class="dalton_ex">
                  <div class="round-right dalton_ex-item">
                    <div class="icon"><img src="/src/img/dalton-ex-img1.png" alt=""></div>
                    <div class="txt">
                      <p class="t1">General</p>
                      <p class="t2">normal color vision</p>
                    </div>
                  </div>
                  <div class="round-left dalton_ex-item">
                    <div class="icon"><img src="/src/img/dalton-ex-img2.png" alt=""></div>
                    <div class="txt">
                      <p class="t1">Color weakness</p>
                      <p class="t2">red-green color blindness</p>
                    </div>
                  </div>
                  <div class="dalton_ex-item">
                    <div class="icon"><img src="/src/img/dalton-ex-img3.png" alt=""></div>
                    <div class="txt">
                      <p class="t1 medium"><span class="mark">*</span>Dalton</p>
                      <p class="t2">After wearing Dalton</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main_sec main_product">
    <div class="main_sec-top">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <p class="content_title1">Dalton’s color blindness correction <br/>eyewear products give you the gift of color.</p>
            <a href="/sub/product" class="ui-btn link-btn">
              <span class="txt">View product</span>
              <img src="/src/img/link-icon.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="main_sec-ct">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <div class="main_product-types">
              <div class="main_product-type-item item1">
                <div class="img">
                  <img src="/src/img/main-product-img1.jpg" alt="">
                </div>
                <div class="txt">
                  <p class="t1">clip-on</p>
                  <p class="t2">Glasses frame (metal frame)/clip-on/<br/>color blindness correction lens</p>
                </div>
              </div>
              <div class="main_product-type-item item2">
                <div class="round-top img">
                  <img src="/src/img/main-product-img2.jpg" alt="">
                </div>
                <div class="txt">
                  <p class="t1">metal frame</p>
                  <p class="t2">Glasses frame (metal frame)/<br/>color blindness correction lens</p>
                </div>
              </div>
              <div class="main_product-type-item item3">
                <div class="round img">
                  <img src="/src/img/main-product-img3.jpg" alt="">
                </div>
                <div class="txt">
                  <p class="t1">acetate frame</p>
                  <p class="t2">Glasses frame (acetate frame)/<br/>color blindness correction lens</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="marquee_text">
        <div class="track">
          <p class="tbox">
            <span class="black">Color Weakness </span>
            <span class="gray">Correction </span>
            <span class="black">Eyewear </span>
            <span class="gray">Product </span>
            <span class="black">Color Weakness </span>
            <span class="gray">Correction </span>
            <span class="black">Eyewear </span>
            <span class="gray">Product</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="main_sec main_inspection">
    <div class="container">
      <div class="wrapper">
        <div class="inner">
          <div class="main_sec-top">
            <p class="content_title1">Find out your color blindness type with an online color blindness test!</p>
            <p class="content-text3"><b>Based on the results, we will find the most suitable color blindness glasses product.</b></p>
          </div>
          <div class="main_sec-ct">
            <div class="main_inspection-img">
              <img src="/src/img/main_inspection-img.jpg" alt="">
            </div>
            <button type="button" class="ui-btn link-btn">
              <span class="txt">Color blind test</span>
              <img src="/src/img/link-icon.svg" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- } main -->

<script type="module">
import * as f from '/src/js/function.js';

$(document).ready(function(){
  const $window = $(window);

  // Mouse Scroll
  $window.on('scroll', function(){
    let windowScrollTop = $window.scrollTop();
    
    f.scrollVisible(".main_dalton", function(){
      $(".main_dalton-img-item.item1").css({"transform": `translate3d(0, -${windowScrollTop / 6}px, 0)`});
      $(".main_dalton-img-item.item2").css({"transform": `translate3d(0, -${windowScrollTop / 3}px, 0)`});
      $(".main_dalton-img-item.item3").css({"transform": `translate3d(0, -${windowScrollTop / 10}px, 0)`});
    });

    let mainProduct_top = $(".main_product").offset().top;
    let mainProduct_calcY = -(windowScrollTop - mainProduct_top);

    f.scrollVisible(".main_product", function(){
      $(".main_product-type-item.item1").css({"transform": `translate3d(0, ${mainProduct_calcY}px, 0)`});
      $(".main_product-type-item.item2").css({"transform": `translate3d(0, ${mainProduct_calcY - 275}px, 0)`});
      $(".main_product-type-item.item3").css({"transform": `translate3d(0, ${mainProduct_calcY + 145}px, 0)`});
    });
  });
})
</script>

<?php
include_once(G5_THEME_PATH.'/tail.eng.php');