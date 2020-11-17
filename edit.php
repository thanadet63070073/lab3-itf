<html>
<head>
    <meta charset="UTF-8">
    <title>Mysqli Update</title>
</head>
<body>
<form action="editsave.php?id=<?php echo $_GET["id"];?>"
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$objdb = mysql_select_db("test_db");
$strsql = "SELECT * From guestbook WHERE id = '".$_GET["id"]."' ";
$objquery = mysql_query($strsql);
$objresult = mysql_fetch_array($objquery);
if(!$objresult)
{
    echo "Not found id".$_GET["id"];
}
else
{
?>
<table width="600" border="1">
    <tr>
        <th width="98"><div align="center">Name : </div></th>
        <th width="98"><div align="center">Comment : </div></th>
    </tr>
    <tr>
        <td><div align="cernter"><input type="text" name="Name" value="<?php echo $objresult["Name"];?>"></div></td>
        <td><input type="longtext" name="Comment" value="<?php echo $objresult["Comment"];?>"></td>
    </tr>
</table>
<input type="submit" name="submit" value="แก้ไข">
<?php
}
my_close($conn);
?>
</form>
</body>
</html>