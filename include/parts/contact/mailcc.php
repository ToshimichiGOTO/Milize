<?php
$from = 'info@triple-wing.jp';
$cc = 't-goto@lv6.jp';
$to = 'info@triple-wing.jp';

$subject = "お問合せ";

$body =<<<EOT
{$hd->cv('name')}　様よりお問合せを受け付けました。

お問合せの内容は以下のとおりです。
================================
■氏名
{$hd->cv('name')}

■氏名（ふりがな）
{$hd->cv('kana')}

■メールアドレス
{$hd->cv('mail')}

■お問合せ内容
{$hd->cv('msg')}

================================
------------------------------
防災勇士トリプルウィング
公式WEBサイト

URL https://local.triple-wing.jp/
------------------------------
EOT;
?>
