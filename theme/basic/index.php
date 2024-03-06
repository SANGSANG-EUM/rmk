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

  </div>
</div>
<!-- } main -->

<?php
include_once(G5_THEME_PATH.'/tail.php');