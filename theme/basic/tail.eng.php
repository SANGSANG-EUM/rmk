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
          <p class="slg_t2">RMK presents a <b>vision of life</b> through <br/>universal color vision technology.</p>
          <p class="slg_t3">A world where anyone, even children with color vision deficiency, can become an artist, firefighter, doctor, or pilot; a world where everyone can see clearly and diversely; this is the world that RMK dreams of.</p>
          <ul class="brand_logo">
            <li class="dalton-logo"><img src="/src/img/dalton-logo-w.svg" alt="Dalton Logo"></li>
            <li class="rmk-logo"><img src="/src/img/logo-w.svg" alt="RMK Logo"></li>
          </ul>
        </div>
        <div class="rt">
          <div class="sitemap">
            <ul>
              <li>
                <a href="/eng/sub/dalton">Brand Story</a>
                <ul>
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
                <ul>
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
                <ul>
                  <li>
                    <a href="/eng/sub/dyschromatopsia">Color vision abnormality</a>
                  </li>
                  <li>
                    <a href="/eng/sub/difference">Differentiating Technology</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/news_eng">News</a>
                <ul>
                  <li>
                    <a href="/news_eng">Press</a>
                  </li>
                  <li>
                    <a href="/notice_eng">Notice</a>
                  </li>
                  <li>
                    <a href="/gallery_eng">Gallery</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/eng/sub/guide">Support</a>
                <ul>
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
          <div class="company_info">
            <ul>
              <li>Room 507, Building A, Sejong Daemyung Bellion, 6 Jiphyeonjungang 7-ro, Sejong City (Jiphyeon-dong, Knowledge Industry Center)</li>
              <li><b>CEO</b> : Yoo Min-ki</li>
              <li><b>Company Registration Number</b> : 230-81-11728</li>
              <li><b>Tel</b> : 044-864-1837</li>
              <li><b>E-mail</b> ceo@rmkinc.com</li>
              <li><b>Medical device manufacturing license</b> : No. 6790</li>
              <li><b>venture company</b> : No.20200301008</li>
              <li><b>Prospective social enterprise</b> Sejong No. 2019-28</li>
            </ul>
          </div>
          <p class="copy">©2024 RMK inc. rmkinc.com</p>
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