<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<div id="map" class="sub">
  <div class="sub-head">
    <div class="wrapper">
      <h1 class="sub-head_title">Directions</h1>
      <!-- <p class="sub-head_explan"></p> -->
    </div>
  </div>
  <div class="sub-body">
    <section class="location-list sub-content">
      <div class="wrapper">
        <div class="location-list-wr">
          <ul class="location-list-ul">
            <li class="location-list-li">
              <div class="location-list-li__l">
                <p>Sejong Head Office</p>
              </div>
              <div class="location-list-li__r">
                <ul class="location-info-ul">
                  <li class="location-info-li">
                    <p class="location-info__key">Address</p>
                    <p class="location-info__val">Room 507, Building A, Daemyung Bellion, 6 Jiphyeonjungang 7-ro, Sejong-si</p>
                  </li>
                  <li class="location-info-li">
                    <p class="location-info__key">Tel</p>
                    <p class="location-info__val">044-864-1837</p>
                  </li>
                </ul>
                <div class="location-list-btm">
                  <div class="location-noti">
                    <p class="location-noti-icon">notification</p>
                    <p class="location-noti-cnt">All employees are usually away from work, so please discuss the schedule before visiting.</p>
                  </div>
                  <button type="button" class="location-map-btn open">
                    <img src="/src/img/location-icon_map.svg" alt="">
                    <span></span>
                  </button>
                </div>
                <div class="location-map open">
                  <!-- * 카카오맵 - 지도퍼가기 -->
                  <div id="daumRoughmapContainer1709795045625" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                  <script charset="UTF-8">
                    new daum.roughmap.Lander({
                      "timestamp" : "1709795045625",
                      "key" : "2iecq",
                    }).render();
                  </script>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</div>

<script>
  // 지도 여닫기
  $('.location-map-btn').find('span').text('Open map');
  $('.location-map-btn.open').find('span').text('Close map');

  $('.location-map-btn').on('click', function(){
    if ($(this).hasClass('open')) {
      $('.location-map-btn').removeClass('open');
      $('.location-map-btn').find('span').text('Open map');
      // $('.location-map').stop().slideUp();
      $('.location-map').removeClass('open');
    } else {
      $('.location-map-btn').removeClass('open');
      $('.location-map-btn').find('span').text('Open map');
      // $('.location-map').stop().slideUp();
      $('.location-map').removeClass('open');

      $(this).addClass('open');
      $(this).find('span').text('Close map');
      // $(this).closest('.location-list-btm').siblings('.location-map').stop().slideDown();
      $(this).closest('.location-list-btm').siblings('.location-map').addClass('open');
    }
  });
</script>