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
  ..footer..
</div>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");