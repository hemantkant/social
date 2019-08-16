<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script type="text/javascript">
function js(){
var pw = document.getElementById("pwd").value;
var cpw = document.getElementById("cpwd").value;
var a=true;
if(pw==""){
document.getElementById("s0").innerHTML="*password can't be empty";
a=false;
}
else{
document.getElementById("s0").innerHTML="";
}
if(cpw==""){
document.getElementById("s1").innerHTML="this field can't be empty";
a=false;
}
else{
if(pw!=cpw){
document.getElementById("s1").innerHTML="*password and confirm password should match";
a=false;
}
else{
document.getElementById("s1").innerHTML="";
}
}
return a;
}
</script>
<style type="text/css">
.style1 {
	font-size: medium;
}
.style2 {
	width: 923px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 0;
	margin-bottom: 15;
	padding: 0;
}
.style3 {
	font-size: x-large;
	color: #800000;
}
.style4 {
	text-align: center;
}
.style5 {
	text-align: right;
}
</style>
</head>
<body onsubmit="return js()" >
<div class="main">
  <div class="main_resize">
    <div class="style2" style="height: 317px">
      <div class="logo">
        <h1 style="width: 900px">never be alone <span class="style1">keep&nbsp; smiling&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> 
		<span class="style3"><em>join others and explore the world</em></span></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <div class="clr"></div>
      </div>
      <div class="hbg">
		<img src="images/header_images.jpg" width="923" height="213" alt="" /><div style="position: absolute; width: 100px; height: 100px; z-index: 1" id="layer1">
      
		</div>
		</div>
    </div>
  </div>
</div>
<br/>&nbsp;&nbsp;&nbsp;&nbsp;
<div style="position: absolute; z-index: 2; left: 409px; top: 345px; width: 798px; height: 324px" id="layer2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<br />
&nbsp;&nbsp; &nbsp;&nbsp;
 <?php
      $usrid=$_POST["Text1"];
      $secans=$_POST["Text2"];
      include("db.php");
      $qry="select userid from tbuser where userid='$usrid' and usersecans='$secans' ";
      $result=mysqli_query($con,$qry) or die(mysqli_error($con));
      $row=mysqli_fetch_row($result);
      $n=mysqli_num_rows($result);
      if($n>0){
      ?>
      <form action="forgot4.php" method="post">
      <table style="width: 100%">
		<tr>
			<td class="style5" style="width: 206px">userid</td>
			<td class="style4" style="width: 299px">
				<input name="Text1" type="text" value="<?php echo $row[0]; ?>" readonly />
			&nbsp;</td>
			<td></td>
		</tr>
		<tr>
			<td class="style5" style="height: 26px; width: 206px">new passsword</td>
		<td class="style4" style="height: 26px; width: 299px">
		
			<input name="Password1" type="password" id="pwd" />
		&nbsp;</td>
			<td style="height: 26px"><span id="s0"></span></td>
		</tr>
		<tr>
			<td class="style5" style="width: 206px">confirm password</td>
		<td class="style4" style="width: 299px"><input name="Password2" type="password" id="cpwd" /></td>
			<td><span id="s1"></span></td>
	</tr>
	<tr>
		<td style="width: 206px">&nbsp;</td>
		<td style="width: 299px">
		<input name="Submit1" type="submit" value="check" style="width: 128px" /></td>
	</tr>
</table>
</form>
<?php
}
else{
echo "<font size=3 color=red>please enter valid security ansswer</font>";
}
?>
</div>
<br />
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br><br><br><br><br><br><br><br><br><br>
  <div class="footer_resize" style="height: 16px">
    <p class="lf" style="text-align: center">© Copyright&nbsp; connect with others.</p>
    <div class="clr"></div>
  </div>  
</body>
</html>