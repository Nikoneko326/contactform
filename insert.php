<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$stmt = $pdo->prepare("INSERT INTO contactform(name, mail, age, comments) VALUES(:name, :mail, :age, :comments)");

// パラメータをバインドする
$stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$stmt->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
$stmt->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
$stmt->bindParam(':comments', $_POST['comments'], PDO::PARAM_STR);

// ステートメントを実行する
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset = "UTF-8">
  <title>お問い合わせフォームを作る</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
      <p>お問い合わせ有難うございました。
        <br>3営業日以内に担当者よりご連絡差し上げます。
      </p>
    </div> 
</body>
</html>

