<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
username: <?=$row ["username"]?><br>
password: <?=$row ["password"]?><br>
ชื่อสมาชิก: <?=$row ["name"]?><br>
ที่อยู่: <?=$row ["address"]?><br>
เบอร์โทร: <?=$row ["mobile"]?><br>
อีเมล: <?=$row ["email"]?><br>
</body>
</html>