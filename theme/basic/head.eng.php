<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어

  $header_addclass = 'main_header type2';
} else {
  $header_addclass = 'sub_header';
}
?>

<!-- header { -->
<div id="header" class="<?php echo $header_addclass;?>">
  <div class="container">
    <div class="inner">
      <h1 class="logo">
        <a href="/eng">
          <img src="/src/img/logo.svg" alt="RMK 로고">
        </a>
      </h1>
      <div class="gnb">
        <div class="navi">
          <ul>
            <li>
              <a href="/eng/sub/dalton">Brand Story</a>
              <ul class="depth2">
                <li>
                  <a href="/eng/sub/dalton">Dalton</a>
                </li>
                <li>
                  <a href="/eng/sub/review">Review</a>
                </li>
                <li>
                  <a href="/eng/sub/greeting">Greeting</a>
                </li>
                <li>
                  <a href="/eng/sub/history">History</a>
                </li>
                <li>
                  <a href="/eng/sub/map">Directions</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/eng/sub/sunglasses">Product</a>
              <ul class="depth2">
                <li>
                  <a href="/eng/sub/sunglasses">Color blind Sunglasses</a>
                </li>
                <li>
                  <a href="/eng/sub/lens">Color blind eyeglasses</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/eng/sub/dyschromatopsia">Technology</a>
              <ul class="depth2">
                <li>
                  <a href="/eng/sub/dyschromatopsia">Color vision abnormality</a>
                </li>
                <li>
                  <a href="/eng/sub/difference">Differentiating Technology</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/eng/sub/guide">Support</a>
              <ul class="depth2">
                <li>
                  <a href="/eng/sub/guide">Guide</a>
                </li>
                <li>
                  <a href="/faq_eng">FAQ</a>
                </li>
                <li>
                  <a href="/eng/sub/location">Location</a>
                </li>
                <li>
                  <a href="/contact_eng/write">Contact us</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="language">
          <i class="icon"></i>
          <select name="" id="" class="ui-sel ncSelect" onchange="window.open(value,'_self');">
            <option value="/">KOR</option>
            <option value="/eng" selected>ENG</option>
          </select>
        </div>
        <div class="inspection">
          <button type="button" class="ui-btn round-bottom round-top-left inspection-btn"><img src="/src/img/inspection-w.svg" alt="">Color blind test</button>
        </div>
        <button type="button" class="ui-btn mo-menu_open">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- } header -->

<!-- Mobile Menu { -->
<div class="mo-menu">
  <div class="mo-menu_ct">
    <div class="container">
      <div class="wrapper">
        <div class="inner">
          <button type="button" class="ui-btn mo-menu_close"><img src="/src/img/close-w.svg" alt="메뉴 닫기"></button>
          <div class="mo-tnb">
            <div class="language">
              <i class="icon"></i>
              <select name="" id="" class="ui-sel ncSelect" onchange="window.open(value,'_self');">
                <option value="/">KOR</option>
                <option value="/eng" selected>ENG</option>
              </select>
            </div>
            <button type="button" class="ui-btn round-bottom round-top-left inspection-btn"><img src="/src/img/inspection-w.svg" alt="">Color blind test</button>
          </div>
          <div class="mo-navi">
            <ul>
              <li>
                <a href="javascript:void(0);">Brand Story</a>
                <ul class="depth2">
                  <li>
                    <a href="/eng/sub/dalton">Dalton</a>
                  </li>
                  <li>
                    <a href="/eng/sub/review">Review</a>
                  </li>
                  <li>
                    <a href="/eng/sub/greeting">Greeting</a>
                  </li>
                  <li>
                    <a href="/eng/sub/history">History</a>
                  </li>
                  <li>
                    <a href="/eng/sub/map">Directions</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);">Product</a>
                <ul class="depth2">
                  <li>
                    <a href="/eng/sub/sunglasses">Color blind Sunglasses</a>
                  </li>
                  <li>
                    <a href="/eng/sub/lens">Color blind eyeglasses</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);">Technology</a>
                <ul class="depth2">
                  <li>
                    <a href="/eng/sub/dyschromatopsia">Color vision abnormality</a>
                  </li>
                  <li>
                    <a href="/eng/sub/difference">Differentiating Technology</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);">Support</a>
                <ul class="depth2">
                  <li>
                    <a href="/eng/sub/guide">Guide</a>
                  </li>
                  <li>
                    <a href="/faq_eng">FAQ</a>
                  </li>
                  <li>
                    <a href="/eng/sub/location">Location</a>
                  </li>
                  <li>
                    <a href="/contact_eng/write">Contact us</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- } Mobile Menu -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">