<html>
<head></head>
<body>
<?php
$delete_ID  = $_REQUEST['id'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID=$_GET['id'];
$sql = "DELETE FROM guestbook WHERE id=$ID";
if (mysqli_query($conn, $sql))) {
    echo "Record " . $ID . " was Deleted.";
} else {
    echo "Error : Delete"; mysqli_error($conn);
}

mysqli_close($conn); // ปิดฐานข้อมูล
?>
</body>
</html>