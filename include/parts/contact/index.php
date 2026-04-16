<?php
$debugmode = 0; // テスト時は1に運用時は0にしてください。1にするとメールを送信せず、画面にメールの内容を表示します。

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if ( validate() ){
    if ( isset($_POST['back']) ) {
      include("form.html");
    } else if ( isset($_POST['confirm']) ) {
      sendMail();
      header("Location: end.html");
    } else {
      include("confirm.html");
    }
  } else {
    include("form.html");
  }
} else {
  include("form.html");
}

function sendMail() {
  global $debugmode;

  //mb_language("ja");
  mb_language("uni");
  mb_internal_encoding("UTF-8");

  $to = $_POST['mail'];

  class HD {
    function cv($str){
      $ret = '';
      if( isset($_POST[$str]) ){
        $ret = $_POST[$str];
      }
      return $ret;
    }
  }
  $hd = new HD();

  // 問い合わせ者へメール
  include("mail.php");

  $header="From: $from";
  $header.="\n";

  if($debugmode){
    echo '<hr><pre>TO: ' . $to .'<br>Subject: '. $subject .'<br>Body: <br>'. $body .'<br>Header: <br>'. $header . '</pre>';
  }else{
    mb_send_mail($to,$subject,$body,$header);
  }

  // 担当者へメール
  include("mailcc.php");

  $header="From: $from";
  $header.="\n";
  $header.="Cc: $cc";
  $header.="\n";
  $header.="Reply-To: {$hd->cv('mail')}";
  $header.="\n";


  if($debugmode){
    echo '<hr><pre>TO: ' . $to .'<br>Subject: '. $subject .'<br>Body: <br>'. $body .'<br>Header: <br>'. $header . '</pre>';
  } else {
    mb_send_mail($to,$subject,$body,$header);
  }
}
function validate() {
  global $err;
  $err = array();
  $ret = true;

  // 必須項目判定
  $req = array(
          'name',
          'kana',
          'mail'
         );
  foreach ($req as $val){
    if ( ! isset($_POST[$val]) || empty($_POST[$val]) ) {
      $err['req_' . $val] = 1;
    }
  }

  // メールアドレス判定
  if ( isset($_POST['mail']) && ! filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ){
    $err['format_mail'] = 1;
  }
  // メールフォームで確認用メールアドレスが必要な場合は、コメント外してください。
  /*
  if ( isset($_POST['mail1']) && ! filter_var($_POST['mail1'], FILTER_VALIDATE_EMAIL) ){
    $err['format_mail1'] = 1;
  }
  if ( isset($_POST['mail2']) && ! filter_var($_POST['mail2'], FILTER_VALIDATE_EMAIL) ){
    $err['format_mail2'] = 1;
  }
  if ( isset($_POST['mail1']) && isset($_POST['mail2']) && $_POST['mail1'] !== $_POST['mail2'] ){
    $err['diff_mail2'] = 1;
  }
  */

  if ( count ($err) ){
    $ret = false;
  }

  return $ret;
}


function cv($value,$type=0){
  $ret = '';
  if( isset($value) ){
    $ret = $value;
  }
  if ( $type == 1 ) {
    echo nl2br(htmlentities($ret));
  } else if ( $type == 2 ) {
    return $ret;
  } else {
    echo htmlentities($ret);
  }
}
function cs($value){
  global $subject;
  $ret = '';
  if( isset($value) && isset($subject[$value]) ){
    $ret = $subject[$value][1];
  }
  echo $ret;
}
function cc($value,$compare){
  $ret = '';
  if( isset($value) && $value===$compare ){
    $ret = ' checked ';
  }
  echo $ret;
}
function ec($value){
  global $err;
  $ret = '';

  if ( ! isset($err) ) {
    return;
  }

  foreach ($err as $key => $val){
    if ( preg_match('/_' . $value .'$/', $key) ){
      $ret = ' class="err" ';
    }
  }
  echo $ret;
}
