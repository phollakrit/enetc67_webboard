<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify</title>
</head>
<body>
	<?php 
		if ($_POST["login"]=="admin" && $_POST["pwd"]=="ad1234") {
			$_SESSION['username']="admin";
			$_SESSION['role']="a";
			$_SESSION['id']=session_id();
			header("location:index.php");
			die();
			//echo "ยินดีต้อนรับคุณ ADMIN <br>";
			//echo "<a href="."index.php".">กลับไปยังหน้าหลัก</a>";
		}
		elseif ($_POST["login"]=="member" && $_POST["pwd"]=="mem1234"){
			$_SESSION['username']="member";
			$_SESSION['role']="m";
			$_SESSION['id']=session_id();
			header("location:index.php");
			die();
			//echo "ยินดีต้อนรับคุณ MEMBER <br>";
			//echo "<a href="."index.php".">กลับไปยังหน้าหลัก</a>";
		}
		else{
			$_SESSION['error']='error';
			header("location:login.php");
			die();
			//echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
			//echo "<a href="."index.php".">กลับไปยังหน้าหลัก</a>";
		}
	?>
	</center>

</body>
</html>