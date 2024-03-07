<div id="greeting" class="sub">
  <div class="sub-head">
    <div class="wrapper">
      <h1 class="sub-head_title">인사말</h1>
    </div>
  </div>
  <div class="sub-body">
    <section class="greeting-visual sub-visual"></section>
    <section class="greeting-mean sub-content">
      <div class="greeting-mean_paralax"><b>RMK Dalton</b> Greeting</div>
      <div class="wrapper">
        <p class="greeting-mean_title">알엠케이 의미</p>
        <div class="greeting-mean_content">
          <div class="greeting-mean_box greeting-mean_box1">
            <div class="greeting-mean_item greeting-mean_item1">
              <div class="greeting-mean_word">
                <p class="greeting-mean_en"><b>R</b>esearch</p>
                <p class="greeting-mean_kr">문제해결을 위하여 연구하고</p>
              </div>
              <div class="greeting-mean_word">
                <p class="greeting-mean_en"><b>M</b>aking</p>
                <p class="greeting-mean_kr">만들어보고</p>
              </div>
              <div class="greeting-mean_word">
                <p class="greeting-mean_en"><b>K</b>nowledge</p>
                <p class="greeting-mean_kr">지식을 전한다.</p>
              </div>
            </div>
            <div class="greeting-mean_item greeting-mean_item2">
              <img src="/src/img/greeting-img2.jpg" alt="알엠케이 의미 이미지">
            </div>
          </div>
          <div class="greeting-mean_box greeting-mean_box2">
            <div class="greeting-mean_item greeting-mean_item3">
              <p class="greeting-mean_text1">주식회사 알엠케이는 특별히 색각이상 문제 해결을 위하여 <br/>노력하고 있는 소셜벤처입니다.</p>
              <p class="greeting-mean_text2">첫번째 노력의 결과로 제1색약(적색약)와 제2색약(녹색약)의 색깔 구분에 도움이 되는 색약 보정 안경 렌즈를 개발하였습니다. 향후 색각이상이 있는 분들과 함께 제품의 성능과 품질을 향상시켜 나갈 것 입니다. <br/>알엠케이의 노력은 단지 색약보정 안경 제품과 서비스의 제공 뿐만 아니라 궁극적으로 색각이상에 대한 사회적 편견과 제도적 차별의 개선으로 이어질 것입니다. 앞으로 이어질 RMK의 노력에 많은 관심과 성원 부탁드립니다.</p>
              <p class="greeting-mean_text3">- (주) 알엠케이 임직원 일동</p>
            </div>
            <div class="greeting-mean_item greeting-mean_item4">
              <img src="/src/img/greeting-img1.jpg" alt="알엠케이 의미 이미지">
            </div>
          </div>
        </div>
      </div>
    </section>
    </section>
  </div>
</div>

<script>
$(document).ready(function () {
  $(window).scroll(function () {
    const greetingScroll = $(window).scrollTop() - 900;
    const greetingText = $(".greeting-mean_paralax");
    if(greetingText.length > 0) {
      greetingText.css({
        'transform': 'translateX(-' + greetingScroll / 2 + 'px)'
      });
    }
  });
});
</script>