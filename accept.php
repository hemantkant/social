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
<style type="text/css">
.style1 {
	font-size: large;
}
.style2 {
	font-size: medium;
	font-family: Abbess;
}
</style>
</head>
<body alink="maroon" link="maroon" vlink="maroon">
<div class="main">
  <div class="main_resize" style="height: 363px">
    <div class="header" style="height: 343px">
      <div class="logo">
        <h1 style="width: 900px">never be alone <span class="style1">keep&nbsp; smiling&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
      </div>
      <div class="search">
        <form method="get" id="search" action="#">
          <span>
          <input type="text" value="Search..." name="s" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
        </form>
        <!--/searchform -->
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="home.php">Home</a></li>
          <li class="active"><a href="friend.php">friends</a></li>
          <li><a href="message.php">messages</a></li>
          <li><a href="group.php">groups</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="hbg" style="height: 150px">
		<img src="images/header_images.jpg" width="923" height="185" alt="" /></div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>
<?php
session_start();
$uid=$_SESSION["uid"];
$uimg=$_SESSION["uimg"];
?>
<div style="position: absolute; width: 265px; height: 425px; z-index: 1; left: 169px; top: 427px" id="layer1">
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="style2"><strong>&nbsp;welcome:<?php echo $uid; ?></strong></span>&nbsp;<div style="position: absolute; width: 239px; height: 231px; z-index: 1; left: 3px; top: 3px" id="layer4">
	
	<img src="<?php echo $uimg; ?>" height="150" width="150" />
	</div>
</div>
<div style="position: absolute; width: 241px; height: 172px; z-index: 2; left: 186px; top: 672px" id="layer3" class="style1">
&nbsp;<a href="editprf1.php">EDIT PROFILE</a><br />
<br />
&nbsp;<a href="editpic1.php">EDIT PROFILE PIC</a><br />
	<br />
&nbsp;<a href="editpwd1.php">EDIT PASSWORD</a><br />
	<br />
&nbsp;<a href="editsec1.php">EDIT SECURITY SETTINGS</a></div>

<div style="position: absolute; width: 912px; height: 589px; z-index: 3; left: 443px; top: 517px" id="layer5" class="style1">
<?php
$id=$_GET["id"];
$qry=" update tbfriend set status=1 where userid='$id' and fid='$uid' ";
include("db.php");
mysqli_query($con,$qry) or die(mysqli_error($con));
$qry=" select ifnull(max(sno),0) from tbfriend ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$row=mysqli_fetch_row($result);
$n=$row[0];
$n++;
$qry=" insert into tbfriend values($n,'$uid','$id',1) ";
mysqli_query($con,$qry) or die(mysqli_error($con));
echo" now $id is your friend ";

?>
</div>

</body>
</html>