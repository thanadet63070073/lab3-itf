<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
$delete_name  = $_REQUEST['del_name'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$sql = 'DELETE FROM delete_name WHERE del_name = ' . $delete_name . ';';

$objQuery = mysqli_query($conn, $sql);
if ($objQuery) {
    echo "Record " . $delete_name . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>