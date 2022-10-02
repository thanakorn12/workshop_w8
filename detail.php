<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>
<div>
    <img src='member_photo/<?=$row["username"]?>.jpg' width='100'>
</div>
    ชื่อสมาชิก: <?=$row["username"]?><br>
    ที่อยู่: <?=$row["address"]?><br>
    อีเมล์: <?=$row["email"]?><br>
</body>
</html>