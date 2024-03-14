<div id="greeting" class="sub">
  <div class="sub-head">
    <div class="wrapper">
      <h1 class="sub-head_title">Greeting</h1>
    </div>
  </div>
  <div class="sub-body">
    <section class="greeting-visual sub-visual"></section>
    <section class="greeting-mean sub-content">
      <div class="greeting-mean_paralax"><b>RMK Dalton</b> Greeting</div>
      <div class="wrapper">
        <p class="greeting-mean_title">RMK meaning</p>
        <div class="greeting-mean_content">
          <div class="greeting-mean_box greeting-mean_box1">
            <div class="greeting-mean_item greeting-mean_item1">
              <div class="greeting-mean_word">
                <p class="greeting-mean_en"><b>R</b>esearch</p>
                <p class="greeting-mean_kr"><b>R</b>esearch to solve problems</p>
              </div>
              <div class="greeting-mean_word">
                <p class="greeting-mean_en"><b>M</b>aking</p>
                <p class="greeting-mean_kr">Try <b>M</b>aking it</p>
              </div>
              <div class="greeting-mean_word">
                <p class="greeting-mean_en"><b>K</b>nowledge</p>
                <p class="greeting-mean_kr">Convey <b>K</b>nowledge.</p>
              </div>
            </div>
            <div class="greeting-mean_item greeting-mean_item2">
              <img src="/src/img/greeting-img2.jpg" alt="알엠케이 의미 이미지">
            </div>
          </div>
          <div class="greeting-mean_box greeting-mean_box2">
            <div class="greeting-mean_item greeting-mean_item3">
              <p class="greeting-mean_text1">RMK Co., Ltd. is a social venture that is specifically working to solve the problem of color vision deficiency.</p>
              <p class="greeting-mean_text2">As a result of our first effort, we developed color blindness correction spectacle lenses that help distinguish between color blindness 1 (red) and color 2 (green) weak. In the future, we will work with people with color vision impairment to improve the performance and quality of our products. <br/>RMK's efforts will not only provide color vision correction glasses products and services, but will ultimately lead to the improvement of social prejudice and institutional discrimination against color vision deficiency. We ask for your interest and support in RMK’s future efforts.</p>
              <p class="greeting-mean_text3">- All executives and staff of RMK Co., Ltd.</p>
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