<html>
<head>
<title>Update Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM guestbook WHERE id = $id");
$row = mysqli_fetch_array($res)
?>
<div class="container-fluid">
    <form action = "edit.php?id=<?php echo $row['id']; ?>" method = "post" id="CommentForm" class="form-group"><br>
        <label>Name:</labe><br>
        <textarea cols ="100" type="text" name = "Name" id="idName" value="<?php echo "$row[Name]"; ?>"></textarea><br><br>
        Comment:<br>
        <textarea cols = "100" input type="text" name = "Comment" id="idComment" value="<?php echo "$row[Comment]"; ?>"></textarea><br><br>
        <input type="submit" id="commentBtn"class="btn btn-success" value="แก้ไข">
    </form> 
</div>
</body>
</html>