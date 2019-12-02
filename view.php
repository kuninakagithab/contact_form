<?php
    require_once('function.php');
    require_once('dbconnect.php');
    echo(require_once('dbconnect.php'));

    //SQLを実行
    // ①DBからデータを取得
    $stmt = $dbh->prepare('SELECT * FROM surveys');
    $stmt->execute();
    $results = $stmt->fetchAll();
    // $results = $stmt->fetchAll();この中身は下のようになっている
    // [
    //   0 => ['id' => 1, 'nicname' => 'atushi'..];
    //   1 => ['id' => 2, 'nicname' => 'naoki'..];
    //   2 => ['id' => 3, 'nicname' => 'mashimo'..];
    // ];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>一覧</title>
</head>
<body>
<!-- //②画面に表示する -->
    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['nickname']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['content']); ?></p>
    <?php endforeach; ?>
</body>
</html>