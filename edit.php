<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];
$name = $_POST['Name'];
$comment = $_POST['Comment'];

$sql = "UPDATE guestbook SET Name = '$name', Comment = '$comment' WHERE id = '$id'"; 
if (mysqli_query($conn, $sql)) {
    echo "Update sucess"; 
} else {
    echo "Error: " mysqli_error($conn);
}

mysqli_close($conn);
?>