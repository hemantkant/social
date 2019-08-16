<?php
define('DB_host','localhost');
define('DB_user','root');
define('DB_pass','1234');
define('DB_name','dbsocial');
$con=@mysqli_connect(DB_host,DB_user,DB_pass) or die(mysqli_connect_error());
mysqli_select_db($con,DB_name) or die(mysqli_error($con));
?>