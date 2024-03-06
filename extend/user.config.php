<?php
if (!defined('_GNUBOARD_')) {
  exit;
}
// 개별 페이지 접근 불가;

// https redirect
// if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
//   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//   header('HTTP/1.1 301 Moved Permanently'); header('Location: ' . $redirect);
// }

if ($member['mb_id'] == "iium") {
  $is_admin = "super";
}


// 라우팅 하기 위해 추가
class Route {
  private $config;
  private $g5;
  private $mb;
  private $member;

  function __construct($member, $g5, $config, $mb) {
    $this->member = $member;
    $this->g5     = $g5;
    $this->config = $config;
    $this->mb     = $mb;
  }

  function add($route, $file) {
    $params   = [];
    $paramKey = [];
    preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);
    if (empty($paramMatches[0])) {
      $this->simpleRoute($file, $route);

      return;
    }
    foreach ($paramMatches[0] as $key) {
      $paramKey[] = $key;
    }
    if (!empty($_REQUEST['uri'])) {
      $route  = preg_replace("/(^\/)|(\/$)/", "", $route);
      $reqUri = preg_replace("/(^\/)|(\/$)/", "", $_REQUEST['uri']);
    } else {
      $reqUri = "/";
    }
    $uri      = explode("/", $route);
    $indexNum = [];
    foreach ($uri as $index => $param) {
      if (preg_match("/{.*}/", $param)) {
        $indexNum[] = $index;
      }
    }
    $reqUri = explode("/", $reqUri);
    foreach ($indexNum as $key => $index) {
      if (empty($reqUri[$index])) {
        return;
      }
      $params[$paramKey[$key]] = $reqUri[$index];
      $reqUri[$index]          = "{.*}";
    }
    $reqUri = implode("/", $reqUri);
    $reqUri = str_replace("/", '\\/', $reqUri);
    if (preg_match("/$reqUri/", $route)) {
      $g5     = $this->g5;
      $config = $this->config;
      $mb     = $this->mb;
      $member = $this->member;
      include $file;
    }
  }

  function notFound($file) {
    $g5     = $this->g5;
    $config = $this->config;
    $mb     = $this->mb;
    $member = $this->member;
    include $file;
  }

  private function simpleRoute($file, $route) {
    if (!empty($_REQUEST['uri'])) {
      $route  = preg_replace("/(^\/)|(\/$)/", "", $route);
      $reqUri = preg_replace("/(^\/)|(\/$)/", "", $_REQUEST['uri']);
    } else {
      $reqUri = "/";
    }
    if ($reqUri == $route) {
      $params = [];
      $g5     = $this->g5;
      $config = $this->config;
      $mb     = $this->mb;
      $member = $this->member;
      include $file;
    }
  }
}

// 개별 페이지 접근 불가
class CallApi {

  private $apiKey;
  private $apiKeyName = 'serviceKey';

/**
 * 키 설정
 * @param stirng $apiKey 사용할 키
 */
  public function setApiKey($apiKey) {
    $this->apiKey = $apiKey;
  }

  /**
   * 키 이름 설정
   * @param stirng $apiKeyName 사용할 키 이름
   */
  public function setApiKeyName($apiKeyName) {
    $this->apiKeyParamName = $apiKeyName;
  }

  /**
   * 데이터 바인딩
   * @param array $params get 또는 post 사용될 데이터
   */
  public function buildQueryParams($params) {
    if (!empty($this->apiKey) && !isset($params[$this->apiKeyParamName])) {
      $params[$this->apiKeyParamName] = $this->apiKey;
    }

    return http_build_query($params);
  }

  /**
   * 옵션 설정
   * @param  string $method      get, post
   * @param  string $url         endpoint 주소
   * @param  array  $queryParams body 값
   * @param  array  $headers     헤더 정보
   * @return array  curl 옵션의 전체 정보
   */
  public function buildCurlOptions($method, $url, $queryParams, $headers = []) {
    $options = [
      CURLOPT_URL            => $url . '?' . $queryParams,
      CURLOPT_RETURNTRANSFER => true,
    ];

    if ($method == "POST") {
      $options[CURLOPT_CUSTOMREQUEST] = 'POST';
      $options[CURLOPT_POSTFIELDS]    = $queryParams;
    }

    // 추가적인 헤더 설정
    if (!empty($headers)) {
      $options[CURLOPT_HTTPHEADER] = $headers;
    }

    return $options;
  }

  /**
   * 재시도하는거
   * @param  array  $ch          api 실행
   * @param  string $maxWaitTime 시간 (초)
   * @param  array  $queryParams body 값
   * @param  array  $headers     헤더 정보
   * @return array  curl 옵션의 전체 정보
   */
  public function executeCurlWithRetry($ch, $maxWaitTime = 30) {
    $startTime = time();

    do {
      $response  = curl_exec($ch);
      $error     = curl_error($ch);
      $errorCode = curl_errno($ch);
      $info      = curl_getinfo($ch);

      if ($response !== false || $info['http_code'] != 0) {
        break;
      }

      sleep(1);
    } while (time() - $startTime < $maxWaitTime);

    if ($error || $errorCode !== 0) {
      $response = ($error) ? $error : "CURL Error: $errorCode";
    }

    return $response;
  }

  public function getApi($url, $params, $headers = []) {
    $queryParams = $this->buildQueryParams($params);
    $ch          = curl_init();
    $options     = $this->buildCurlOptions("GET", $url, $queryParams, $headers);

    curl_setopt_array($ch, $options);

    return $ch;
  }

  public function postApi($url, $params, $headers = []) {
    $queryParams = $this->buildQueryParams($params);
    $ch          = curl_init();
    $options     = $this->buildCurlOptions("POST", $url, $queryParams, $headers);

    // 추가적인 POST 설정이 필요하다면 여기에 추가

    curl_setopt_array($ch, $options);

    return $ch;
  }

  public function runApi($method, $url, $params, $headers = []) {
    if ($method == "GET") {
      $ch = $this->getApi($url, $params, $headers);
    } else if ($method == "POST") {
      $ch = $this->postApi($url, $params, $headers);
    } else {
      $ch = $this->postApi($url, $params, $headers);
    }

    $response = $this->executeCurlWithRetry($ch);

    curl_close($ch);

    return $response;
  }
}


class Common_Model {
  public function set($db_input) {
    $set = "";
    end($db_input);
    $last_key = key($db_input);

    foreach ($db_input as $k => $v) {
      $v = str_replace('"', "'", $v);
      if ($k == $last_key) {
        $set .= $k . '= "' . $v . '"';
      } else {
        $set .= $k . '= "' . $v . '",';
      }
    }

    return $set;
  }
}

class IUD_Model extends Common_Model {
  public static function delete($table, $where) {
    $sql = "DELETE FROM {$table} {$where}";
    sql_query($sql, true);

    return $sql;
  }

  public static function insert($table, $db_input) {

    $common_model = new Common_Model();
    $set          = $common_model->set($db_input);

    $sql = "INSERT INTO {$table} SET {$set}";
    sql_query($sql, true);

    $idx = sql_insert_id();

    return $idx;
  }

  public static function update($table, $db_input, $where) {

    $common_model = new Common_Model();
    $set          = $common_model->set($db_input);

    $sql = "UPDATE {$table} SET {$set} {$where}";
    sql_query($sql, true);

  }
}

function log_write($str) {
  $log_dir = $_SERVER["DOCUMENT_ROOT"] . '/data/log';
  if (!is_dir($log_dir)) {
    mkdir($log_dir, 0777, true);
    chmod($log_dir, 0777);
  }

  $log_txt = '[' . date("Y-m-d H:i:s") . '] ';
  $log_txt .= $str;

  $file_name = date('Ymd') . ".txt";
  $log_file  = fopen($log_dir . "/" . $file_name, "a");
  fwrite($log_file, $log_txt . "\r\n");
  fclose($log_file);

  //생성 한지 7일 지난 파일 삭제
  // system("find " . $log_dir . " -name '*.txt' -type f -ctime 6 -exec rm -f {} \;");
}

function shuffle2() {
  $chars_array = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
  shuffle($chars_array);
  $shuffle = implode('', $chars_array);

  return $shuffle;
}
