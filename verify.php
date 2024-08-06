<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify</title>
</head>
<body>
	<h1 align="center">Webboard KakKak</h1>
	<hr>
	<center>
	<?php 
		if ($_POST["login"]=="admin" && $_POST["pwd"]=="ad1234") {
			echo "ยินดีต้อนรับคุณ ADMIN <br>";
			echo "<a href="."index.php".">กลับไปยังหน้าหลัก</a>";
		}
		elseif ($_POST["login"]=="member" && $_POST["pwd"]=="mem1234"){
			echo "ยินดีต้อนรับคุณ MEMBER <br>";
			echo "<a href="."index.php".">กลับไปยังหน้าหลัก</a>";
		}
		else{
			echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
			echo "<a href="."index.php".">กลับไปยังหน้าหลัก</a>";
		}
	?>
	</center>

</body>
</html>