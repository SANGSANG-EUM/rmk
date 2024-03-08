<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(EUM_INCLUDE_PATH.'/sub_top.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

/*
#회원관리 > 최고관리자(admin) 메일 주소로 발송됨
#기본환경설정 > 글작성메일: 최고관리자 사용 체크
#게시판관리 > 해당 게시판 수정 > 기능설정: 메일발송 사용 체크
#스팸메일함으로 수신될 수 있음
*/
?>

<div id="qa-write" class="sub">
  <div class="sub-head">
    <div class="wrapper">
      <h1 class="sub-head_title">문의하기</h1>
      <p class="sub-head_explan">우리에게 궁금한 것이 있으신가요?</p>
    </div>
  </div>
  <div class="sub-body">
    <div class="wrapper">
      <!-- 게시물 작성/수정 시작 { -->
      <section id="bo_w">
        <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

        <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
          <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
          <input type="hidden" name="w" value="<?php echo $w ?>">
          <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
          <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
          <input type="hidden" name="sca" value="<?php echo $sca ?>">
          <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
          <input type="hidden" name="stx" value="<?php echo $stx ?>">
          <input type="hidden" name="spt" value="<?php echo $spt ?>">
          <input type="hidden" name="sst" value="<?php echo $sst ?>">
          <input type="hidden" name="sod" value="<?php echo $sod ?>">
          <input type="hidden" name="page" value="<?php echo $page ?>">
          <input type="hidden" name="wr_subject" value="문의글이 등록되었습니다.">

          <div class="qa-form">

            <?php
            $option = '';
            $option_hidden = '';
            if ($is_notice || $is_html || $is_secret || $is_mail) { 
              $option = '';
              if ($is_notice) {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
              }
              if ($is_html) {
                  if ($is_dhtml_editor) {
                    $option_hidden .= '<input type="hidden" value="html1" name="html">';
                  } else {
                    $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
                  }
              }
              if ($is_secret) {
                  if ($is_admin || $is_secret==1) {
                    $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
                  } else {
                    $option_hidden .= '<input type="hidden" name="secret" value="secret">';
                  }
              }
              if ($is_mail) {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
              }
            }
            echo $option_hidden;
            ?>

            <div class="qa-section">
              <div class="qa-head">
                <p class="qa-head_title">문의하실 내용이 무엇인가요?<span>(필수*)</span></p>
              </div>
              <div class="qa-body qa-body-category">
                <?php if ($is_category) { ?>
                  <!-- // select 대신 하단 radio 추가하여 사용
                  <div class="bo_w_select write_div">
                    <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
                    <select name="ca_name" id="ca_name" required>
                      <option value="">분류를 선택하세요</option>
                      <?php echo $category_option ?>
                    </select>
                  </div> -->
                  <?php
                  $categories = explode("|", $board['bo_category_list']);
                  for ($i = 0; $i < count($categories); $i++) {
                    $category = trim($categories[$i]);
                    if (!$category)
                      continue;
                    $checked = ($category == $write['ca_name']) ? ' checked' : '';
                  ?>
                    <input type="radio" name="ca_name" id="ca_name_<?php echo $i ?>" value="<?php echo $category ?>"<?php echo $checked ?> class="qa-category_radio">
                    <label for="ca_name_<?php echo $i ?>" class="qa-category_label"><?php echo $category ?></label>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>

            <div class="qa-section">
              <div class="qa-head">
                <p class="qa-head_title">신청하시는 분의 정보를 알려주세요.</p>
              </div>
              <div class="qa-body qa-body-inform">
                <div class="qa-inform_list">
                  <div class="qa-inform_item">
                    <label for="wr_name" class="qa-inform_label">성함*</label>
                    <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="qa-inform_text">
                  </div>
                  <?php if ($is_password) { ?>
                  <div class="qa-inform_item">
                    <label for="wr_password" class="qa-inform_label">비밀번호*</label>
                    <input type="password" name="wr_password" value="<?php echo $name ?>" id="wr_password" required class="qa-inform_text">
                  </div>
                  <?php } ?>
                  <div class="qa-inform_item">
                    <label for="wr_homepage" class="qa-inform_label">연락처*</label>
                    <input type="text" name="wr_homepage" id="wr_homepage" value="<?php echo $homepage ?>" required class="qa-inform_text">
                  </div>
                  <div class="qa-inform_item">
                    <label for="wr_email" class="qa-inform_label">이메일*</label>
                    <input type="text" name="wr_email" id="wr_email" value="<?php echo $email ?>" required class="qa-inform_text email">
                  </div>
                </div>
              </div>
            </div>

            <div class="qa-section">
              <div class="qa-head">
                <p class="qa-head_title">무엇을 도와드릴까요?<span>(필수*)</span></p>
              </div>
              <div class="qa-body qa-body-content">
                <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                  <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                </div>
                <div class="qa-policy">
                  <div class="qa-policy-check check-wrap">
                    <input type="checkbox" name="po_ck1" id="po_ck1">
                    <label for="po_ck1" class="qa-policy-check_label"><u>개인정보 수집 및 이용</u>에 동의합니다. (필수*)</label>
                  </div>
                  <div class="qa-policy-content">
                    <textarea readonly><?php echo get_text($config['cf_privacy']) ?></textarea>
                    <button type="button" class="qa-policy-close">[닫기]</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="qa-section">
              <div class="qa-head">
                <p class="qa-head_title">마케팅 활용 동의 및 광고 수신 동의</p>
              </div>
              <div class="qa-body qa-body-marketing">
                <p class="qa-marketing_text">서비스와 관련된 신상품 소식, 이벤트 안내, 고객 혜택 등 다양한 정보를 제공합니다.</p>
                <!-- 
                  * 아래 두 체크박스의 value 값 변경 시 
                  * skin\board\qa\view.skin.php 파일의 내용도 꼭 변경 필요
                -->
                <div class="qa-marketing_list">
                  <div class="qa-marketing_check check-wrap">
                    <input type="checkbox" name="wr_1" id="wr_1" value="Y">
                    <label for="wr_1">SMS 수신동의 (선택)</label>
                  </div>
                  <div class="qa-marketing_check check-wrap">
                    <input type="checkbox" name="wr_2" id="wr_2" value="Y">
                    <label for="wr_2">E-mail 수신동의 (선택)</label>
                  </div>
                </div>
              </div>
            </div>

            <?php if ($is_use_captcha) { ?>
            <div class="qa-section">
              <div class="qa-head">
                <p class="qa-head_title">자동등록방지<span>(필수*)</span></p>
              </div>
              <div class="qa-body qa-body-captcha">
                <?php echo $captcha_html ?>
              </div>
            </div>
            <?php } ?>

            <!-- 
            <div class="inquiry_ct">
              <table class="inquiry_tb">
                <tbody>
                  <tr>
                    <td>
                      <p>관련링크</p>
                    </td>
                    <td>
                      <div class="inquiry_content">
                        <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
                        <div class="bo_w_link">
                          <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
                          <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){ echo $write['wr_link'.$i]; } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
                        </div>
                        <?php } ?>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>파일첨부</p>
                    </td>
                    <td>
                      <div class="inquiry_content">
                        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                        <div class="bo_w_flie">
                          <div class="file_wr">
                            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
                            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                          </div>
                          <?php if ($is_file_content) { ?>
                          <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
                          <?php } ?>

                          <?php if($w == 'u' && $file[$i]['file']) { ?>
                          <span class="file_del">
                            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                          </span>
                          <?php } ?>
                        </div>
                        <?php } ?>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> -->

            <div class="btn_confirm">
              <ul class="i-col-0 btn_confirm_ul">
                <li>
                  <button type="submit" id="btn_submit" accesskey="s" class="btn_submit bo_btn1"><?php echo $w=='u'?'수정하기':'문의하기'; ?></button>
                </li>
                <?php if($is_admin){ ?>
                <li>
                  <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel bo_btn2">목록보기</a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </form>

        <script>
        $(document).ready(function(){
          $('.qa-policy-check_label u').on('click', function(event){
            event.preventDefault();
            event.stopPropagation();
            // $('.qa-policy-content').slideDown();
          });
          $('.qa-policy-close').on('click', function(){
            $('.qa-policy-content').slideUp();
          });
        })
        <?php if($write_min || $write_max) { ?>
        // 글자수 제한
        var char_min = parseInt(<?php echo $write_min; ?>); // 최소
        var char_max = parseInt(<?php echo $write_max; ?>); // 최대
        check_byte("wr_content", "char_count");

        $(function() {
            $("#wr_content").on("keyup", function() {
                check_byte("wr_content", "char_count");
            });
        });

        <?php } ?>
        function html_auto_br(obj)
        {
            if (obj.checked) {
                result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                if (result)
                    obj.value = "html2";
                else
                    obj.value = "html1";
            }
            else
                obj.value = "";
        }

        var email1 = "",
            email2 = "";

        function fwrite_submit(f)
        {
            <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>
            
            if($("input[name='ca_name']").is(":checked") == false){
              alert("분류를 선택하세요.");
              return false;
            }

            var subject = "";
            var content = "";
            $.ajax({
                url: g5_bbs_url+"/ajax.filter.php",
                type: "POST",
                data: {
                    "subject": f.wr_subject.value,
                    "content": f.wr_content.value
                },
                dataType: "json",
                async: false,
                cache: false,
                success: function(data, textStatus) {
                    subject = data.subject;
                    content = data.content;
                }
            });

            if (subject) {
                alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
                f.wr_subject.focus();
                return false;
            }

            if (content) {
                alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
                if (typeof(ed_wr_content) != "undefined")
                    ed_wr_content.returnFalse();
                else
                    f.wr_content.focus();
                return false;
            }

            if (document.getElementById("char_count")) {
                if (char_min > 0 || char_max > 0) {
                    var cnt = parseInt(check_byte("wr_content", "char_count"));
                    if (char_min > 0 && char_min > cnt) {
                        alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                        return false;
                    }
                    else if (char_max > 0 && char_max < cnt) {
                        alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                        return false;
                    }
                }
            }
            
            if($("#po_ck1").is(":checked") == false){
              alert("개인정보 수집 및 이용에 동의해주세요.");
              return false;
            }

            <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

            document.getElementById("btn_submit").disabled = "disabled";

            return true;
        }
        </script>
      </section>
      <!-- } 게시물 작성/수정 끝 -->
    </div>
  </div>
</div>