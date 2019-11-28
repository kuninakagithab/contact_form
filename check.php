<?php
// 入力内容の取得
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];

// 入力内容のチェック　空かどうか
if ($nickname == '') {
    $nickname_result = 'ニックネームを入力してね。';
} else {
    $nickname_result = 'よくぞ参られた、' . $nickname .'殿';
}

if ($email == '') {
    $email_result = 'メールアドレスが入力されていません。';
} else {
    $email_result = 'メールアドレス：' . $email.'で間違いないな';
}

if ($content == '') {
    $content_result =  'お問い合わせ内容が入力されていません。';
} else {
    $content_result = 'お問い合わせ内容：' . $content;
}
    // // ニックネーム
    // $nickname = $_POST['nickname'];
    // echo $nickname;
    // echo '<br>';

    // // メールアドレス
    // $email = $_POST['email'];
    // echo $email;
    // echo '<br>';
    // // お問い合わせ
    // $content = $_POST['content'];
    // echo $content;
    // echo '<br>';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
<h1>入力内容確認</h1>
<!-- 画面に表示 -->
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>
</body>
</html>