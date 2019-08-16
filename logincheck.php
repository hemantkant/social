<?php
 if(isset($_POST["Text1"]) && isset($_POST["Password1"])){
$un=$_POST["Text1"];
$up=$_POST["Password1"];
define('DB_host','localhost');
define('DB_user','root');
define('DB_pass','1234');
define('DB_name','dbsocial');
$con=@mysqli_connect(DB_host,DB_user,DB_pass) or die(mysqli_connect_error());
mysqli_select_db($con,DB_name) or die(mysqli_error($con));
$qry=" select userimg from tbuser where userid='$un' and userpwd='$up' ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$n=mysqli_num_rows($result);
if($n>0){
	header("location:home.php");
	session_start();
	$_SESSION["uid"]=$un;
	$row=mysqli_fetch_row($result);
	$_SESSION["uimg"]=$row[0];
}
else{
	header("location:invalid.html");
}
}
else{
header("location:login.html");
}

?>