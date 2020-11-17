<?php
$conn = mysqli_connect('lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);

if (!$conn) {
	die("Connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)" . mysqli_connect_error());
} else {
	echo "Connection : OK (เชื่อมต่อฐานข้อมูลสำเร็จ)";
}

mysqli_close($conn);
?>
