<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name_id = $_GET['Name_ID']
$q = "DELETE FROM guestbook WHERE Name_ID='$name_id'";
$objQuery = mysqli_query($conn, $q);
if ($objQuery) {
    header("Location: face.php");
} else {
    echo "Error";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
?>
