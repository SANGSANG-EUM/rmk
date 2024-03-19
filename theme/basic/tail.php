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
      <a href="https://smartstore.naver.com/rmk-dalton" class="ui-btn naverStore-btn" target="_blank"></a>
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
                <a href="/sub/dalton">브랜드 스토리</a>
                <ul>
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
                <ul>
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
                <ul>
                  <li>
                    <a href="/sub/dyschromatopsia">색각이상이란?</a>
                  </li>
                  <li>
                    <a href="/sub/difference">차별화 기술</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/news_kr">새소식</a>
                <ul>
                  <li>
                    <a href="/news_kr">보도자료</a>
                  </li>
                  <li>
                    <a href="/notice_kr">공지사항</a>
                  </li>
                  <li>
                    <a href="/gallery_kr">갤러리</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/sub/guide">고객지원</a>
                <ul>
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
                <a href="https://www.facebook.com/people/%EC%A3%BC%EC%8B%9D%ED%9A%8C%EC%82%AC-%EC%95%8C%EC%97%A0%EC%BC%80%EC%9D%B4-RMK-Inc/61552426027382/" target="_blank">
                  <img src="/src/img/sns-facebook.svg" alt="Facebook">
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/rmk_dalton/" target="_blank">
                  <img src="/src/img/sns-instagram.svg" alt="Instagram">
                </a>
              </li>
              <li>
                <a href="https://blog.naver.com/rmkinc2018" target="_blank">
                  <img src="/src/img/sns-blog.svg" alt="Blog">
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/@rmkdalton1940" target="_blank">
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

<!-- 색각검사 팝업 { -->
<?php 
add_javascript('<script type="module" src="'.EUM_JS_URL.'/inspection.js" defer></script>', 0);
?>
<div id="inspection_popup" class="layer-popup">
  <div class="layer-popup_ct">
    <div class="top">
      <p class="tit">색각검사</p>
      <button type="button" class="ui-btn close-btn" title="팝업 닫기">
        <img src="/src/img/close-w.svg" alt="닫기">
      </button>
    </div>
    <div class="mid">

      <div class="cbTest_preInfo">
        <p class="t1">검사 기간은 1~2분 이내입니다. <br/>왼쪽 그림에 보이는 숫자를 오른쪽 보기에서 선택해 주시면 됩니다.</p>
        <div class="bd_tbox">
          <p class="t2">다음 사항은 검사결과에 영향을 줄 수 있으니 검사 전 꼭 확인해주세요.</p>
          <ul class="t-dot_list">
            <li class="t3">· 모니터의 블루라이트 필터, 색약모드 등을 꺼주세요</li>
            <li class="t3">· 블루라이트 차단 안경, 착색 렌즈를 착용 중이시라면 벗어주세요.</li>
            <li class="t3">· 모니터가 너무 어둡지 않게 밝기를 적절히 조절해 주세요.</li>
          </ul>
        </div>
        <div class="check-wrap">
          <input type="checkbox" name="" id="cbTest-agree" value="1">
          <label for="cbTest-agree">본 색각검사 기능의 개선을 위해 비식별화된 검사결과를 ㈜알엠케이에 제공하는것에 동의합니다.</label>
        </div>
        <div class="bot-btns">
          <button type="button" id="cbTest-start_btn" class="ui-btn step-btn2">검사시작</button>
        </div>
      </div>

      <div class="cbTest_wrap">
        <div class="inner">
          <div class="cbTest-img">
            <img src="/src/img/t-cbtest-img1.jpg" alt="">
          </div>
          <div class="cbTest-chkList">
            <input type="text" name="" id="cbTest-input">
            <ul>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="1">1</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="2">2</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="3">3</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="4">4</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="5">5</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="6">6</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="7">7</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="8">8</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="9">9</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="number" data-cbt-value="0">0</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="noidea" data-cbt-value="noidea">모름</button>
              </li>
              <li>
                <button type="button" class="ui-btn cbTest-chkList_btn" data-cbt-type="reset" data-cbt-value="reset">Reset</button>
              </li>
            </ul>
          </div>
        </div>
        <div class="bot-btns">
          <button type="button" id="cbTest-next_btn" class="ui-btn step-btn2">다음</button>
        </div>
      </div>

      <div class="cbTest_loading">
        <div class="loading_icon"></div>
        <p class="t1"><b>검사결과</b>를 <b>확인</b>하고 있습니다.</p>
        <p class="t3">검사결과를 취합하는데 시간이 소요될 수 있습니다. <br/>조금만 기다려주시면 검사결과가 화면에 나타납니다.</p>
      </div>

      <div class="cbTest_result">
        <div class="icon">
          <img src="/src/img/inspection_o_icon.png" alt="">
          <!-- 색각이상자일 경우 { 
          <img src="/src/img/inspection_x_icon.png" alt="">
          } 색각이상자일 경우 -->
        </div>
        <p class="t1"><b>정상색각</b></p>
        <p class="inspection-type">
          <span>약도 (제1도) D1</span>
        </p>
        <div class="bd_tbox">
          <p class="t3">약도(제1도)의 제2색각이상(Deutan: 녹색약, 녹색맹)이 의심됩니다.</p>
          <p class="t3">정확한 진단을 위해서는 반드시 전문 안과의와 상의하세요.</p>
          <p class="t3">총 21문제 중 00문제를 맞추셨습니다.</p>
        </div>
        <div class="bot-btns">
          <a href="/sub/guide" class="ui-btn step-btn1">제품선택가이드</a>
          <a href="/contact_kr/write" class="ui-btn step-btn2">문의하기</a>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- } 색각검사 팝업 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");