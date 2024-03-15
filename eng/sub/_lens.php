<div id="product" class="sub">
  <div class="sub-body">
    <section class="product-visual lens sub-content">
      <div class="bg">
        <img src="/src/img/product-lens-bg.jpg" alt="">
      </div>
      <div class="wrapper">
        <p class="product-visual_title">Color blind eyeglasses</p>
        <p class="product-visual_text1">RMK has been recognized for various patents and technologies both domestically and overseas.</p>
        <p class="product-visual_text2">RMK also manufactures color-blind eyeglass lenses for professional opticians that have completed the first-class medical device manufacturing report.</p>
        <div class="product-visual_scroll"></div>
      </div>
    </section>
    <section class="product-content sub-content">
      <div class="wrapper">
        <!-- 제품 리스트 영역 -->
        <div class="product-list">
          <!-- loop { -->
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <!-- } loop -->
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb4.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb5.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
            </div>
          </div>
          <div class="product-list_item">
            <a href="/sub/product_view" class="product-list_thumb">
              <img src="/src/img/product-thumb6.jpg" alt="제품 이미지">
            </a>
            <div class="product-list_info">
              <a href="/sub/product_view" class="product-list_name">DALTON 1.56CC V1</a>
              <p class="product-list_price">Contact us for price</p>
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