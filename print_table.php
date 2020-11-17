<html>
<head></head>
<body>
  <?php
  require('connect.php');
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
     <td><?php echo $Result['Name'];?></div></td>
     <td><?php echo $Result['Comment'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
