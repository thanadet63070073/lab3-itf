<html>
<head>
    <meta charset="UTF-8">
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$onjdb = mysql_select_db("test_db");
$Name = $_POST['Name'];
$Comment = $_POST['Comment'];
$strsql = "update guestbook set
Name = '$Name', Comment = '$Comment' WHERE id = ".$_GET["id"]."' ";
$objquery = mysql_query($strsql);
if($objquery)
{
    echo "Save Done.";
}
else
{
    echo "Error" [".$strsql."];
}
mysqli_close($conn);
?>
<button> เพิ่ม <class=middle> </button>
</body>
</html>