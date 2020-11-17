<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$strsql = "delete form guestbook where id = '".$_GET["id"]."' ";
$objquery = mysql_quary($strsql);
if($objquery)
{
    echo "Sucess"
}
else
{
    echo "Fail"
}

mysqli_close($conn); // ปิดฐานข้อมูล
?>
</body>
</html>