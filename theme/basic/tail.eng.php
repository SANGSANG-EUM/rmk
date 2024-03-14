<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
</div><!-- header.php : #contents_dom -->
<!-- } 콘텐츠 끝 -->

<div class="fix_btns">
  <ul>
    <li>
      <button type="button" class="ui-btn inspection-btn"></button>
    </li>
    <li>
      <a href="" class="ui-btn naverStore-btn"></a>
    </li>
    <li>
      <a href="" class="ui-btn amazon-btn"></a>
    </li>
    <li>
      <button type="button" class="ui-btn top-btn"></button>
    </li>
  </ul>
</div>

<!-- 푸터 시작 { -->
<div id="footer">
  <div class="container">
    <div class="wrapper">
      <div class="inner">
        <div class="lt">
          <p class="slg_t1">Universal <br/>Color Visions</p>
          <p class="slg_t2">RMK는 유니버설 컬러 비전 기술을 통해 <br/><b>삶의 비전</b>을 제시합니다.</p>
          <p class="slg_t3">색각이상이 있는 아이들도 누구나 예술가 · 소방관 · 의사 · 비행사가 될 수 있는 세상, <br/>모두가 선명하고 다양하게 볼 수 있는 세상, <br/>알엠케이가 꿈꾸는 세상입니다.</p>
          <ul class="brand_logo">
            <li class="dalton-logo"><img src="/src/img/dalton-logo-w.svg" alt="Dalton Logo"></li>
            <li class="rmk-logo"><img src="/src/img/logo-w.svg" alt="RMK Logo"></li>
          </ul>
        </div>
        <div class="rt">
          <div class="sitemap">
            <ul>
              <li>
                <a href="/eng/sub/dalton">브랜드 스토리</a>
                <ul>
                  <li>
                    <a href="/eng/sub/dalton">돌튼 Dalton</a>
                  </li>
                  <li>
                    <a href="/eng/sub/review">고객 리뷰</a>
                  </li>
                  <li>
                    <a href="/eng/sub/greeting">인사말</a>
                  </li>
                  <li>
                    <a href="/eng/sub/history">주요 연혁</a>
                  </li>
                  <li>
                    <a href="/eng/sub/map">오시는 길</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/eng/sub/sunglasses">제품소개</a>
                <ul>
                  <li>
                    <a href="/eng/sub/sunglasses">색약 선글라스</a>
                  </li>
                  <li>
                    <a href="/eng/sub/lens">색약 안경렌즈</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/eng/sub/dyschromatopsia">기술소개</a>
                <ul>
                  <li>
                    <a href="/eng/sub/dyschromatopsia">색각이상이란?</a>
                  </li>
                  <li>
                    <a href="/eng/sub/difference">차별화 기술</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/news_eng">새소식</a>
                <ul>
                  <li>
                    <a href="/news_eng">보도자료</a>
                  </li>
                  <li>
                    <a href="/notice_eng">공지사항</a>
                  </li>
                  <li>
                    <a href="/gallery_eng">갤러리</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/eng/sub/guide">고객지원</a>
                <ul>
                  <li>
                    <a href="/eng/sub/guide">가이드</a>
                  </li>
                  <li>
                    <a href="/faq_eng">FAQ</a>
                  </li>
                  <li>
                    <a href="/eng/sub/location">체험장 안내</a>
                  </li>
                  <li>
                    <a href="/contact_eng/write">문의하기</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="company_info">
            <ul>
              <li>세종시 집현중앙7로 6, 세종대명벨리온 A동 507호 (집현동, 지식산업센터)</li>
              <li><b>대표이사</b> : 유민기</li>
              <li><b>사업자등록번호</b> : 230-81-11728</li>
              <li><b>전화번호</b> : 044-864-1837</li>
              <li><b>E-mail</b> ceo@rmkinc.com</li>
              <li><b>의료기기제조업허가</b> : 제6790호</li>
              <li><b>벤처기업</b> : 제20200301008호</li>
              <li><b>예비사회적기업</b> 세종 제2019-28호</li>
            </ul>
          </div>
          <p class="copy">©2024 (주)알엠케이 RMKinc.com</p>
          <div class="sns">
            <ul>
              <li>
                <a href="" target="_blank">
                  <img src="/src/img/sns-facebook.svg" alt="Facebook">
                </a>
              </li>
              <li>
                <a href="" target="_blank">
                  <img src="/src/img/sns-instagram.svg" alt="Instagram">
                </a>
              </li>
              <li>
                <a href="" target="_blank">
                  <img src="/src/img/sns-blog.svg" alt="Blog">
                </a>
              </li>
              <li>
                <a href="" target="_blank">
                  <img src="/src/img/sns-youtube.svg" alt="YouTube">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");