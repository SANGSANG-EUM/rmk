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
                    <p class="typing-txt">세상의 아름다움을 선명하게 보여주다.</p>
                    <p class="typing"></p>
                  </div>
                  <p class="t2">모두를 위한 색약보정 아이웨어 전문, 알엠케이</p>
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
            <p class="content_title1">색약인 아이를 위해, <br/>연구원 아빠가 만든 색약보정 선글라스 Dalton</p>
            <p class="content-text2">돌튼 선글라스는 <br/>하늘을 더 <b>파랗게,</b> 단풍은 더 <b>붉게,</b> <br/>국화는 더 <b>노랗게</b> 보여줍니다.</p>
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

              <p class="content-text">알엠케이의 <b>색상 보정 안경 브랜드 ‘돌튼’</b>은 <br/><b>돌터니즘</b>의 <b>John Dalton</b>에서 탄생했습니다.</p>

              <div class="dalton_proud">
                <div class="round-right dalton_proud-item">
                  <div class="icon"></div>
                  <div class="t1">국내 최초 개발</div>
                  <div class="t2">국내 순수 기술로 최초 개발된 <br/>색약 보정 안경입니다.</div>
                </div>
                <div class="round-top dalton_proud-item">
                  <div class="icon"></div>
                  <div class="t1">선명한 컬러</div>
                  <div class="t2">사물을 바라볼 때 <br/>더욱 선명한 컬러를 재현합니다.</div>
                </div>
                <div class="round-top-right dalton_proud-item">
                  <div class="icon"></div>
                  <div class="t1">컬러 선글라스</div>
                  <div class="t2">대중적인 선글라스로서 누구나 <br/>컬러 선글라스를 즐길 수 있습니다.</div>
                </div>
              </div>

              <div class="dalton_exp">
                <p class="content_title1">돌튼의 효과를 경험하고 싶지만 <br/>외출이 힘드신가요?</p>
                <p class="content-text3"><b>착용 전후 사진</b>을 아래에서 비교해보시고, <br/>이전에 느끼지 못했던 <b>경험을 누리세요.</b></p>

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
                      <p class="t2">일반 색각</p>
                    </div>
                  </div>
                  <div class="round-left dalton_ex-item">
                    <div class="icon"><img src="/src/img/dalton-ex-img2.png" alt=""></div>
                    <div class="txt">
                      <p class="t1">Color weakness</p>
                      <p class="t2">적록색약</p>
                    </div>
                  </div>
                  <div class="dalton_ex-item">
                    <div class="icon"><img src="/src/img/dalton-ex-img3.png" alt=""></div>
                    <div class="txt">
                      <p class="t1 medium"><span class="mark">*</span>Dalton</p>
                      <p class="t2">돌튼 착용 후</p>
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
            <p class="content_title1">색약보정 아이웨어 돌튼의 제품은 <br/>색을 선물해드립니다.</p>
            <a href="/sub/product" class="ui-btn link-btn">
              <span class="txt">제품 보러가기</span>
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
                  <p class="t1">클립온</p>
                  <p class="t2">안경테(금속 프레임)/클립온/색약보정렌즈</p>
                </div>
              </div>
              <div class="main_product-type-item item2">
                <div class="round-top img">
                  <img src="/src/img/main-product-img2.jpg" alt="">
                </div>
                <div class="txt">
                  <p class="t1">금속프레임</p>
                  <p class="t2">안경테(금속 프레임)/색약보정렌즈</p>
                </div>
              </div>
              <div class="main_product-type-item item3">
                <div class="round img">
                  <img src="/src/img/main-product-img3.jpg" alt="">
                </div>
                <div class="txt">
                  <p class="t1">아세테이트 프레임</p>
                  <p class="t2">안경테(아세테이트 프레임)/색약보정렌즈</p>
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
            <p class="content_title1">온라인 색약테스트로 <br/>본인의 색약 유형을 알아보세요!</p>
            <p class="content-text3"><b>결과를 바탕으로 가장 적합한 색약 안경 제품을 찾아드립니다.</b></p>
          </div>
          <div class="main_sec-ct">
            <div class="main_inspection-img">
              <img src="/src/img/main_inspection-img.jpg" alt="">
            </div>
            <button type="button" class="ui-btn link-btn">
              <span class="txt">색각 검사하기</span>
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