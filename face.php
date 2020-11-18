<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
  <tr class="table-info">
    <th width="600"> <div align="center">Name</div></th>
    <th width="1200"> <div align="center">Comment </div></th>
    <th width="115"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr class="table-warning">
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><a href="delete.php?id=<?php echo $Result['id']?>" class="btn btn-outline-danger">ลบ</a>
        <a href="edit_form.php?id=<?php echo $Result['id']?>"class="btn btn-outline-primary">แก้ไข</a>
    </td>
  </tr>
<?php
}
?>
</table>
</body>
<body>
  <form name="add_form" action="form.html" medthod="post"><br>
    <div align="center"><button type="submit"  class="btn btn-primary mb-2">เพิ่ม</button></div>
  </form>
<?php
mysqli_close($conn);
?>
</body>
</html>