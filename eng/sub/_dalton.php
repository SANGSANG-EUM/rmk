<div id="dalton" class="sub">
  <div class="sub-head">
    <div class="wrapper">
      <h1 class="sub-head_title">Dalton</h1>
    </div>
  </div>
  <div class="sub-body">
    <section class="dalton-visual sub-visual"></section>
    <section class="dalton-overview sub-content">
      <div class="wrapper">
        <p class="content_title1">A company specializing in color <br/>correction glasses for color blind people. <br/>This is ‘RMK Dalton’.</p>
        <div class="dalton-overview_list">
          <div class="dalton-overview_row dalton-overview_row1">
            <div class="dalton-overview_content">
              <p class="dalton-overview_text1">The beginning of RMK</p>
              <p class="dalton-overview_text2">My two sons were born with color blindness. </p>
              <div class="dalton-overview_text3">
                <p>I was surprised once when my two sons developed color blindness, which I thought was someone else's problem, and I was surprised twice when I found out that it was a common problem, affecting 1.65 million people in Korea alone. Imported lenses for color blindness on the market were too expensive compared to their limited functionality. The red lens color, which is too prominent, also made it difficult to wear in everyday life.</p>
                <p>I have been researching display semiconductor technology at the Electronics and Telecommunications Research Institute. I thought I could develop better products by utilizing my expertise in thin film coating, so I founded RMK, which manufactures color blindness correction eyeglass lenses, in 2018.</p>
                <p>After living as a researcher, I suddenly became a businessman, and there were so many unexpected difficulties. However, I feel rewarded because there are so many people who sympathize with and support the idea that my technology can make someone's life more colorful.</p>
              </div>
            </div>
            <div class="dalton-overview_image circle">
              <img src="/src/img/dalton-img1.jpg" alt="아이 이미지">
            </div>
          </div>
          <div class="dalton-overview_row dalton-overview_row2">
            <div class="dalton-overview_content">
              <p class="dalton-overview_text1">First color vision researcher</p>
              <p class="dalton-overview_text2">John Dalton</p>
              <div class="dalton-overview_text3">
                <p>John Dalton (1766-1844) was an English chemist, physicist, and meteorologist. He is known as the first proponent of the atomic theory, and he was the first to study color vision deficiency after realizing that he was unable to distinguish all the colors that normal people can see.</p>
                <p>Since 1793, many papers have been published through detailed research on color vision deficiency, which became the origin of the term red-green vision deficiency (daltonism).</p>
              </div>
            </div>
            <div class="dalton-overview_image">
              <img src="/src/img/dalton-img2.jpg" alt="존 돌턴 이미지">
            </div>
          </div>
          <div class="dalton-overview_row dalton-overview_row3">
            <div class="dalton-overview_content">
              <p class="dalton-overview_text1">Domestic technology development lens</p>
              <p class="dalton-overview_text2">Color blindness correction sunglasses, Dalton</p>
              <div class="dalton-overview_text3">
                <p>RMK’s color blindness correction eyeglass lens/sunglasses brand ‘Dalton’ was born from John Dalton of Daltonism. <br/>Dalton is the first color blindness correction spectacle lens developed purely with domestic technology. It reproduces more vivid colors when looking at objects, and has been developed so that anyone can enjoy colored sunglasses, not only for color blind people, but also as a popular sunglass.</p>
                <p>RMK is a Korean brand company that succeeded in commercializing color blindness correction sunglasses for the first time in Korea, which had previously relied on expensive imported products, using reliable domestic technology.</p>
                <p>Through patents and certifications recognized as a result of technology development over the past three years, color distortion can be minimized when people with color blindness wear Dalton, adding to the richness of their daily lives.</p>
              </div>
            </div>
            <div class="dalton-overview_image h-circle">
              <img src="/src/img/dalton-img3.jpg" alt="돌튼 이미지">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="dalton-video sub-content">
      <div class="wrapper">
        <p class="content_title1">RMK promotional video</p>
        <div class="dalton-video_thumb"></div>
        <div class="dalton-video_popup">
          <div class="dalton-video_frame">
            <iframe src="https://www.youtube.com/embed/DwgFoUaI9VU?rel=0" title="[MADEINKOREA]알엠케이, 전세계 3억 색약인을 위한  &#39;달튼&#39; 국내최초 상용화!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<script>
// 동영상 정지(초기화)
function stopVideo() {
  const iframe = $('.dalton-video_frame iframe');
  const iframeSrc = iframe.attr('src');
  iframe.attr('src', iframeSrc);
}

$(document).ready(function(){
  // 홍보영상 팝업
  const videoBtn = $('.dalton-video_thumb');
  const videoPop = videoBtn.siblings('.dalton-video_popup');

  videoBtn.on('click', function(e) {
    e.stopPropagation();
    videoPop.fadeToggle();
  });

  $(document).on('click', function(e) {
    const isPopup = videoPop.has(e.target).length > 0 || videoBtn.has(e.target).length > 0;
    if (!isPopup) {
      videoPop.fadeOut();
      stopVideo();
    }
  });
})
</script>