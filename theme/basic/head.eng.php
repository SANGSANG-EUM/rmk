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
        <a href="/">
          <img src="/src/img/logo.svg" alt="RMK 로고">
        </a>
      </h1>
      <div class="gnb">
        <div class="navi">
          <ul>
            <li>
              <a href="/sub/dalton">브랜드 스토리</a>
              <ul class="depth2">
                <li>
                  <a href="/sub/dalton">돌튼 Dalton</a>
                </li>
                <li>
                  <a href="/sub/review">고객 리뷰</a>
                </li>
                <li>
                  <a href="/sub/greeting">인사말</a>
                </li>
                <li>
                  <a href="/sub/history">주요 연혁</a>
                </li>
                <li>
                  <a href="/sub/map">오시는 길</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/sub/sunglasses">제품소개</a>
              <ul class="depth2">
                <li>
                  <a href="/sub/sunglasses">색약 선글라스</a>
                </li>
                <li>
                  <a href="/sub/lens">색약 안경렌즈</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/sub/dyschromatopsia">기술소개</a>
              <ul class="depth2">
                <li>
                  <a href="/sub/dyschromatopsia">색각이상이란?</a>
                </li>
                <li>
                  <a href="/sub/difference">차별화 기술</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/sub/guide">고객지원</a>
              <ul class="depth2">
                <li>
                  <a href="/sub/guide">가이드</a>
                </li>
                <li>
                  <a href="/faq_kr">FAQ</a>
                </li>
                <li>
                  <a href="/sub/location">체험장 안내</a>
                </li>
                <li>
                  <a href="/contact_kr/write">문의하기</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="language">
          <i class="icon"></i>
          <select name="" id="" class="ui-sel ncSelect">
            <option value="kor" selected>KOR</option>
            <option value="eng">ENG</option>
          </select>
        </div>
        <div class="inspection">
          <button type="button" class="ui-btn round-bottom round-top-left inspection-btn"><img src="/src/img/inspection-w.svg" alt="">색각검사</button>
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
              <select name="" id="" class="ui-sel ncSelect">
                <option value="kor" selected>KOR</option>
                <option value="eng">ENG</option>
              </select>
            </div>
            <button type="button" class="ui-btn round-bottom round-top-left inspection-btn"><img src="/src/img/inspection-w.svg" alt="">색각검사</button>
          </div>
          <div class="mo-navi">
            <ul>
              <li>
                <a href="javascript:void(0);">브랜드 스토리</a>
                <ul class="depth2">
                  <li>
                    <a href="/sub/dalton">돌튼 Dalton</a>
                  </li>
                  <li>
                    <a href="/sub/review">고객 리뷰</a>
                  </li>
                  <li>
                    <a href="/sub/greeting">인사말</a>
                  </li>
                  <li>
                    <a href="/sub/history">주요 연혁</a>
                  </li>
                  <li>
                    <a href="/sub/map">오시는 길</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);">제품소개</a>
                <ul class="depth2">
                  <li>
                    <a href="/sub/sunglasses">색약 선글라스</a>
                  </li>
                  <li>
                    <a href="/sub/lens">색약 안경렌즈</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);">기술소개</a>
                <ul class="depth2">
                  <li>
                    <a href="/sub/dyschromatopsia">색각이상이란?</a>
                  </li>
                  <li>
                    <a href="/sub/difference">차별화 기술</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);">고객지원</a>
                <ul class="depth2">
                  <li>
                    <a href="/sub/guide">가이드</a>
                  </li>
                  <li>
                    <a href="/faq_kr">FAQ</a>
                  </li>
                  <li>
                    <a href="/sub/location">체험장 안내</a>
                  </li>
                  <li>
                    <a href="/contact_kr/write">문의하기</a>
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