'use strict'

import * as f from './function.js';

$(document).ready(function () {
  // 색각검사
  const inspPopup = "#inspection_popup";
  const $inspBtn_open = $(".inspection-btn");
  const $inspBtn_close = $(inspPopup).find(".close-btn");
  const $inspBtn_start = $(inspPopup).find("#cbTest-start_btn");
  const $inspBtn_next = $(inspPopup).find("#cbTest-next_btn");
  const $inspKeypadBtn = $(".cbTest-chkList_btn");
  const $inspImage = $(inspPopup).find(".cbTest-img");
  const $inspAnswer = $(inspPopup).find("#cbTest-input");
  const $inspPreInfo = $(inspPopup).find(".cbTest_preInfo");
  const $inspCbTest = $(inspPopup).find(".cbTest_wrap");
  const $inspLoading = $(inspPopup).find(".cbTest_loading");
  const $inspResult = $(inspPopup).find(".cbTest_result");

  // [색각검사(Function)] 시작 전 안내사항 화면
  const inspPreInfo = (disp) => {
    $inspPreInfo.css("display", disp);
    $inspCbTest.css("display", "none");
    $inspLoading.css("display", "none");
    $inspResult.css("display", "none");
  }

  // [색각검사(Function)] 검사 화면
  const inspCbTest = (disp) => {
    $inspCbTest.css("display", disp);
    $inspPreInfo.css("display", "none");
    $inspLoading.css("display", "none");
    $inspResult.css("display", "none");
  }

  // [색각검사(Function)] 검사 결과 로딩 화면
  const inspLoading = (disp) => {
    $inspLoading.css("display", disp);
    $inspPreInfo.css("display", "none");
    $inspCbTest.css("display", "none");
    $inspResult.css("display", "none");

    setTimeout(function() {
      inspResult('block');
    }, 1000); 
  }

  // [색각검사(Function)] 검사 결과 화면
  const inspResult = (disp) => {
    $inspResult.css("display", disp);
    $inspPreInfo.css("display", "none");
    $inspCbTest.css("display", "none");
    $inspLoading.css("display", "none");
  }

  // [색각검사(Function)] 보기 입력 초기화
  const inspAnswerInit = () => {
    $inspAnswer.val('');
  }

  // [색각검사(Function)] 키패드 입력
  const inspAnswerWrite = (val) => {
    let oriVal = String($inspAnswer.val());

    $inspAnswer.val(oriVal + String(val));
  }

  // [색각검사(Event)] 팝업 열기
  $inspBtn_open.on('click', function(){
    f.popupOpen(inspPopup);
    inspPreInfo('block');
  });

  // [색각검사(Event)] 팝업 닫기
  $inspBtn_close.on('click', function(){
    f.popupClose(inspPopup);
  });

  // [색각검사(Event)] 시작 버튼
  $inspBtn_start.on('click', function(){
    inspCbTest('block');
  });

  // [색각검사(Event)] 다음 버튼
  $inspBtn_next.on('click', function(){
    //임시 결과로 이동되게 함
    //실개발은 상황에 따라 다음문제 또는 결과로 이동되게 구현
    inspLoading('block');
  });

  // [색각검사(Event)] 키패드 입력
  $inspKeypadBtn.on('click', function(){
    let cbtType = $(this).data('cbt-type');
    let cbtValue = $(this).data('cbt-value');

    if(cbtType && cbtValue) {
      const cbtTypes = {
        number: function(){
          inspAnswerWrite(cbtValue);
        },
        noidea: function(){
          inspAnswerInit();
        },
        reset: function(){
          inspAnswerInit();
        }
      }[cbtType]();
    } else {
      console.log("타입을 찾을 수 없습니다.");
    }
  });
});