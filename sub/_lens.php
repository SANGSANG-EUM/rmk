<div id="product" class="sub">
  <div class="sub-body">
    <section class="product-visual lens sub-content">
      <div class="wrapper">
        <p class="product-visual_title">색약 안경렌즈</p>
        <p class="product-visual_text1">알엠케이는 국내 및 해외에서 다양한 <br/>특허와 기술을 인정받았습니다.</p>
        <p class="product-visual_text2">알엠케이에서는 1등급 의료기기 제조 신고를 마친 전문 안경원용 <br/>색약 안경렌즈도 제조하고 있습니다.</p>
        <div class="product-visual_scroll"></div>
      </div>
    </section>
    <section class="product-content sub-content">
      <div class="wrapper">
        <!-- 제품 리스트 영역 -->
        <div class="product-list">
          <!-- loop { -->
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <!-- } loop -->
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">별도 문의</p>
            </div>
          </div>
        </div>
        <!-- // 제품 리스트 영역 -->
      </div>
    </section>
  </div>
</div>

<script>
$(document).ready(function(){
  // 제품 검색 팝업
  const productSchBtn = $('.product-search_btn');
  const productSch = productSchBtn.parent('.product-search');

  productSchBtn.on('click', function(e) {
    e.stopPropagation();
    productSch.toggleClass('active');
  });

  $(document).on('click', function(e) {
    const isClickInside = productSch.has(e.target).length > 0 || productSchBtn.has(e.target).length > 0;
    if (!isClickInside && productSch.hasClass('active')) {
      productSch.removeClass('active');
    }
  });
})
</script>