<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "DELETE FROM guestbook WHERE id=$id";
if (mysqli_query($conn, $sql))) {
    echo "Record " . $ID . " was Deleted.";
} else {
    echo "Error : Delete"; mysqli_error($conn);
}

mysqli_close($conn); // ปิดฐานข้อมูล
?>
