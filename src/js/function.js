'use stict'

/**
 * Swiper Slider
 * @param {string} t : 타겟(id or class)
 * @param {*} opt : swiper options
 * @returns {el, swiper} 선택자(타겟), 생성된 swiper
 */
export const slider = function(t, opt) {
  if(document.querySelectorAll(t).length > 0){
    const options = opt;
    const swiper = new Swiper(t, options);
    const el = document.querySelector(t);
    const swiperControl = el?.querySelector(".swiper-control");

    if (swiperControl) {
      if(swiper.slides.length <= 1) {
        el.querySelector(".swiper-control").classList.remove('on');
      } else {
        el.querySelector(".swiper-control").classList.add('on');
      }
    }

    return {
      el: el,
      swiper: swiper
    }
  }
}

/**
 * 가로 스크롤 메뉴
 * @param {string} t : 타겟(id or class)
 * @param {string} a : 활성할 메뉴(data-id)
 * @returns {el, swiper} 선택자(타겟), 생성된 swiper
 */
export const hrizonMenu = function(t, a) {
  if(document.querySelectorAll(t).length > 0){
    const options = {
      slidesPerView: "auto",
      freeMode: true
    }
    const swiper = new Swiper(t, options);
    const el = document.querySelector(t);
    const activeMenuEl = el.querySelector(`[data-id="${a}"]`);
    let activeMenuIndex = "";
    
    if(a) {
      activeMenuIndex = Array.from(activeMenuEl?.parentNode.children).indexOf(activeMenuEl);
    } else {
      activeMenuIndex = 0;
    }

    swiper.slideTo(activeMenuIndex);
    // swiper.slides[activeMenuIndex].classList.add('active');
    swiper.slides.forEach((slide, index) => {
      if (index === activeMenuIndex) {
          slide.classList.add('active');
      } else {
          slide.classList.remove('active');
      }
    });

    return {
      el: el,
      swiper: swiper
    }
  }
}

/**
 * 타이머 남은 시간계산
 * @param {string} deadline // d-day (yyyy-mm-dd hh:mm:ss)
 * @returns {string} d-day까지 남은 시간 (n일 시:분:초)
 */
const timer = function(deadline) {
  let result = "";
  let now = new Date().getTime();
  let diff = Math.max(0, new Date(deadline).getTime() - now);
  let days = Math.max(0, Math.floor(diff / (1000 * 60 * 60 * 24)));
  let hours = Math.max(0, Math.floor((diff / (1000 * 60 * 60)) % 24));
  let minutes = Math.max(0, Math.floor((diff / (1000 * 60)) % 60));
  let seconds = Math.max(0, Math.floor((diff / 1000) % 60));

  if (diff === 0) {
    result = "";
  } else {
    days = days == 0 ? '' : days+'일';
    hours = hours < 10 ? '0'+hours : hours;
    minutes = minutes < 10 ? '0'+minutes : minutes;
    seconds = seconds < 10 ? '0'+seconds : seconds;

    result = `${days} ${hours}:${minutes}:${seconds}`;
  }

  return result;
}

/**
 * 타이머(남은시간) 랜더링
 * @param {string} t : 랜더링 타겟 요소(id or class)
 */
export const timeSale = function(t) {
  if(document.querySelectorAll(t).length > 0){
    const elList = document.querySelectorAll(t);
    let newTime = "";


    elList.forEach(function(el) {
      let deadline = el.getAttribute("data-deadline");

      setInterval(() => {
        newTime = timer(deadline);

        if(newTime) {
          el.innerHTML = newTime;
        }
      }, 1000);
    })
  }
}

/**
 * 할인율 계산 : ((공급가 - 판매가) / 공급가) * 100
 * @param {number} supPrice : 공급가
 * @param {number} salePrice : 판매가
 * @returns {number} 할인율
 */
export const dcPercent = (supPrice, salePrice) => {
  const percent = Math.round(((supPrice - salePrice) / supPrice) * 100);

  return percent;
}

// 아코디언 메뉴
export const arcodianF = () => {
  let arcoBtn = $('.arcodianBtn');
  arcoBtn.on('click',function(){
    const $this = $(this);
    $this.toggleClass('active');
    if($this.hasClass('active')){
      $this.next().slideDown();
    }else{
      $this.next().slideUp();
    }
  });
  
  let arcoCheck = $('.arcodianBtn .frm-choice');
  if(arcoCheck) {
    arcoCheck.click(function(e){ 
        event.stopPropagation();   
    });
  }
}

// 팝업 열기
export const popupOpen = (t) => {
  $(t).fadeIn(200).addClass("on");
}

// 팝업 닫기
export const popupClose = (t) => {
  $(t).fadeOut(200).removeClass("on");
}

/**
 * 레이어팝업으로 불러오기
 * @param {*} popid : 팝업 ID (#포함)
 * @param {*} rqurl : 요청 주소 (PATH or URL)
 * @param {*} rqm : 요청 방식 (GET or POST)
 * @param {object} rqd : 전달 데이터
 * @param {boolean} shouldOpenPopup : 팝업 표시 여부
 * @returns result : 반환 데이터
 */
export const callData = (popid, rqurl, rqm, rqd, shouldOpenPopup = false) => {
  let result = "";

  if(rqm == "GET") {
    $.get(rqurl, rqd)
    .done(function(data, status) {
      result = data;

      if (shouldOpenPopup) {
        $(popid).find(".pop-content-in").html(data);
        $(".popDim").show().css({"z-index":"560"});
        $(popid).fadeIn(200).addClass("on")
      }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
      console.error('Request failed:', textStatus, errorThrown);
    });
  } else if(rqm == "POST") {
    $.post(rqurl, rqd)
    .done(function(data, status) {
      result = data;

      if (shouldOpenPopup) {
        $(popid).find(".pop-content-in").html(data);
        $(".popDim").show().css({"z-index":"560"});
        $(popid).fadeIn(200).addClass("on")
      }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
      console.error('Request failed:', textStatus, errorThrown);
    });
  }

  return result;
}

// 링크 복사
export const clipCopy = (str) => {
  var tempElement = document.createElement("textarea");

  tempElement.value = str;

  document.body.appendChild(tempElement);

  tempElement.select();

  tempElement.setAttribute("readonly", "");
  tempElement.setAttribute("contenteditable", "false");
  tempElement.style.position = 'absolute';
  tempElement.style.left = '-9999px';
  tempElement.setSelectionRange(0, tempElement.value.length);

  document.execCommand('copy');

  document.body.removeChild(tempElement);

  alert("링크가 복사되었습니다.");
}

// 별점 기능
export const scoreF = () => {
  const scoreInput = document.querySelectorAll('.score-list input[type="radio"]');
  const scoreView = document.querySelector('.score-add');
  
  scoreInput.forEach(radio => {
    radio.addEventListener('change', function() {
      scoreView.textContent = this.value;
    });
  });
  
  const scoreResult = document.querySelector('.score-list input[type="radio"]:checked');
  if (scoreResult) {
    scoreView.textContent = scoreResult.value;
  }
}

// 파일 용량 체크
const checkFileSize = (file, fileSize) => {
  if (!file || file.size > fileSize * 1024 * 1024) {
    alert('파일이 존재하지 않거나 '+fileSize+'MB를 초과합니다.');
    return false;
  }
  return true;
}

// 이미지 확장자 체크
const checkFileImg = (fileName) => {
  const allowedExtensions = ['.jpg', '.jpeg', '.png', '.gif'];
  const fileExtension = fileName.substring(fileName.lastIndexOf('.')).toLowerCase();
  if (!allowedExtensions.includes(fileExtension)) {
    alert('jpg, jpeg, png, gif 확장자만 첨부 가능합니다.');
    return false;
  }
  return true;
}

// 이미지 업로드 (미리보기)
export const previewImage = (el) => {
  const imgUploadInput = el.target;
  const imgUploadItem = imgUploadInput.parentElement;
  const imgUploadFile = imgUploadInput.files[0];
  const imgReader = new FileReader();

  // console.log(imgUploadFile, "file view test");

  // > 파일 용량 및 확장자 체크
  if (!checkFileSize(imgUploadFile,10) || !checkFileImg(imgUploadFile.name)) {
    return;
  }

  imgReader.onload = function() {
    const imgUploadView = imgUploadItem.querySelector('.img-upload-view');
    imgUploadView.classList.add('active');
    imgUploadView.style.backgroundImage = `url(${imgReader.result})`;
    imgUploadItem.querySelector('.img-upload-delete').style.display = 'block';
  }
  imgReader.readAsDataURL(imgUploadFile);
}

// 이미지 업로드 (미리보기 삭제)
export const deleteImage = (el) => {
  const imgUploadItem = el.target.closest('.img-upload-item');
  const imgUploadDel = imgUploadItem.querySelector('.img-upload-delete');
  const imgUploadInput = imgUploadItem.querySelector('.img-upload-input');
  const imgUploadView = imgUploadItem.querySelector('.img-upload-view');

  const confirmDelete = confirm("해당 이미지를 삭제하시겠습니까?");
  if (confirmDelete) {
    imgUploadView.classList.remove('active');
    imgUploadView.style.backgroundImage = '';
    imgUploadInput.value = '';
    imgUploadDel.style.display = 'none';
  }
}

// 텍스트 타이핑 효과
export const textTyping = (el) => {
  let typingEl = $(el);

  typingEl?.each(function(index){
    let tyInt = "";
    let typingBool = false; 
    let typingIdx = 0; 

    let typingTxt = "";

    typingTxt = $(this).text().split("");

    $(".typing").text('');
    

    if(typingBool == false){ 
      typingBool = true;

      let self = $(this);
      
      tyInt = setInterval(function(){
        if(typingIdx < typingTxt.length){ 
          self.siblings(".typing").append(typingTxt[typingIdx]);
          typingIdx++; 
        } else { 
          clearInterval(tyInt);
          // typingTxt = "";
          
          // console.log("te")
        }
      }, 100);
    } 
    
  });
}

/* 스크롤시 특정영역 감지 */
export const checkVisible = ( element, check = 'above' ) => {
  const viewportHeight = $(window).height();
  const scrolltop = $(window).scrollTop();
  const y = $(element).offset().top;
  const elementHeight = $(element).height();   
  
  if (check == "visible") 
    return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));
      
  if (check == "above") 
    return ((y < (viewportHeight + scrolltop)));
}

export const scrollVisible = (element, callback) => {
  let isVisible = false;

  if ( !isVisible && checkVisible(element) ) {
    if (typeof callback === 'function') {
      callback();
    }

    isVisible = true;
  }

  isVisible && window.removeEventListener('scroll', scrollVisible);
}

/* mCustomScrollBar */
export const scrollBar = (t) => {
  $(t).mCustomScrollbar({
    theme:"dark"
  });
}

/* Scroll to top */
export const scrollTop = () => {
  $("body,html").animate({
      scrollTop: 0
  }, 400);
}

/* magnifier(image zoom) */
/*
https://github.com/SaintSilver/Magnifying-Glass?tab=readme-ov-file

html
<div class="area">
  <img class="target" src="test.png" alt="" data-zoom="2">
</div>

css
.area {position: relative;}
.area .target {display: block; width: 100%;}
.magnifier {display: none; position: absolute; width: 150px; height: 150px; border-radius: 100%; box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.85), 0 0 3px 3px rgba(0, 0, 0, 0.25);}
*/
export const magnify = (area, tg) => {
  let target = $(tg);
  let zoom = target.data('zoom');
  let magnifier;

  $(area)
    .on('mousemove', {target, zoom}, magnifyFunc)
    .prepend("<div class='magnifier'></div>")
    .children('.magnifier').css({
      "background": "url('" + target.attr("src") + "') no-repeat",
      "background-size": target.width() * zoom + "px " + target.height() * zoom + "px"
    });

  magnifier = $(area).children('.magnifier');
}

const magnifyFunc = (e) => {
  let mouseX = e.pageX - $(e.currentTarget).offset().left;
  let mouseY = e.pageY - $(e.currentTarget).offset().top;
  let magnifier = $(e.currentTarget).children('.magnifier');
  let {target, zoom} = e.data;

  if (mouseX < $(e.currentTarget).width() && mouseY < $(e.currentTarget).height() && mouseX > 0 && mouseY > 0) {
    magnifier.fadeIn(100);
  } else {
    magnifier.fadeOut(100);
  }

  if (magnifier.is(":visible")) {
    let rx = -(mouseX * zoom - magnifier.width() / 2);
    let ry = -(mouseY * zoom - magnifier.height() / 2);
    let px = mouseX - magnifier.width() / 2;
    let py = mouseY - magnifier.height() / 2;

    magnifier.css({
      left: px,
      top: py,
      backgroundPosition: rx + "px " + ry + "px"
    });
  }
}