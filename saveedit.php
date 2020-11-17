<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$Name = $_REQUEST['Name'];
$Comment = $_REQUEST['Comment'];
$sql = "
	UPDATE guestbook
	Name = '" . $Name . "', 
	Comment = '" . $Comment . "', 
$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "Record " . $update_ID . " was Updated.";
} else {
	echo "Error : Update";
}
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>