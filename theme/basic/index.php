<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
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
                <div class="round-right  dalton_proud-item">
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
          </div>
        </div>
      </div>
    </div>
    <div class="main_sec-ct">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <div class="main_product-type">
              <div class="main_product-type-item item1">
                <img src="/src/img/main-dalton-img1.jpg" alt="">
              </div>
              <div class="round-top main_product-type-item item2">
                <img src="/src/img/main-dalton-img2.jpg" alt="">
              </div>
              <div class="round main_product-type-item item3">
                <img src="/src/img/main-dalton-img3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- } main -->

<?php
include_once(G5_THEME_PATH.'/tail.php');