<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab3itf.mysql.database.azure.com', 'tee@lab3itf', 'thanadet123@', 'itflab', 3306);
if (!$conn){
    die('Failed to connect to MySQL: '.mysqli_connect_error());
} else {
    echo "Connection : OK"
}
mysqli_close($conn);
?>
