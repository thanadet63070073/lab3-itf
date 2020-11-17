<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table border="1">
  <tr>
    <th width="500"> <div align="center">ID</idv></th>
    <th width="500"> <div align="center">Name</div></th>
    <th width="1000"> <div align="center">Comment </div></th>
    <th width="500"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['id'];?></div></td>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><a href="delete.php?id=<?php echo result["id"];?>">ลบ</a>
    <a href="edit.php?id=<?php echo $result["id"];?>">แก้ไข</td>
  </tr>
<?php
}
?>
</table>
</body>
<body>
  <form name="add_form" action="form.html" medthod="post"><br>
    <div align="center"><input type="submit"  value="เพิ่ม" /></div>
  </form>
<?php
mysqli_close($conn);
?>
</body>
</html>