<?php
// リロードしてエラーが出なければOK
// エラーが出る場合はファイル名かdbconnect.phpの中身が間違っている
// PDOE　SQLSTATのエラーが出たときはファイルの中身が間違っている
require_once('dbconnect.php');
// DB内に保存されている検索機能を作る

// 検索ボタンをクリックしたら、
// ユーザーが入力した内容と一致するデータを画面に表示する


// ユーザーが入力した内容を取得
// isset() 引数が存在していれば
$nickname = '';
if(isset($_GET['nickname'])){
  $nickname = $_GET['nickname'];
  // echo($nickname);
}

// ユーザーが入力した内容でDBを検索
  // DBに接続する。これは上でやっているため省略

  // MySQLを実行する
  // WHERE を使って条件を絞る
  // prepare = 準備
  $stmt = $dbh->prepare('SELECT * FROM surveys WHERE nickname = ?');
  // execute = 実行する   引数はお問い合わせ内容に入力したことのある内容
  $stmt->execute([$nickname]);
  // 実行したけ結果を変数$resultsに代入する
  // 保存するときなどは下の処理はいらない
  $results = $stmt->fetchAll();

  // 検索結果の表示確認のため書いた
  // echo'<pre>';
  // var_dump($results);
  // exit;


// 検索結果を画面に表示する


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
  <!-- action属性を空っぽにすると今いるページにとぶ -->
    <form action="" method="get">
        <p>検索したいnicknameを入力してください。</p>
        <input type="text" name="nickname">
        <input type="submit" value="検索">
    </form>
    <!-- 画面に表示する -->
    <?php foreach($results as $key ): ?>
    <!-- idやnicknameはDBのカラム名 -->
    <p> <?php echo $key['id'] ?> </p>
    <p> <?php echo $key['nickname'] ?> </p>
    <?php endforeach; ?>
</body>
</html>