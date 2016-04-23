<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$tel = $_GET["tel"];
;
echo date("Y年m月d日 H:i:s");
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム：GET</title>
</head>

<body>
<div>名前：<?php echo $name; ?></div>
<div>メール：<?php echo $mail; ?></div>
<div>電話：<?php echo $tel; ?></div>
</body>

</html>