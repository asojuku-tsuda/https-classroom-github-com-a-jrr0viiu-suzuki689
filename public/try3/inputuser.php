<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php

$username = filter_input(INPUT_GET,'username');
$useraddress = filter_input(INPUT_GET,'useraddress');
$usermail = filter_input(INPUT_GET,'usermail');

if (mb_ereg('^[ぁ-んァ-ヶー-龠々]{20}+$',$username)==false){
  die("20文字までの日本語で入力してください。");
}

if (mb_ereg('^[ぁ-んァ-ヶー-龠々]{50}+$',$useraddress)==false){
  die("50文字までの日本語で入力してください。");
}

if (mb_ereg('^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$',$usermail)==false){
  die("100文字までで入力してください。");
}


echo "あなたが入力した値<br>";
echo "名前：" . $_GET['username'] . "<br>";
echo "住所：" . $_GET['useraddress']. "<br>";
echo "メールアドレス：" . $_GET['usermail'];
?>
    </h2>
    </div>
  </body>
</html>
