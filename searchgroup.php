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
<body>
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
          <li><a href="home.php">Home</a></li>
          <li><a href="friend.php">friends</a></li>
          <li><a href="message.php">messages</a></li>
          <li class="active"><a href="group.php">groups</a></li>
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

<div style="position: absolute; width: 912px; height: 687px; z-index: 3; left: 446px; top: 505px" id="layer5" class="style1">

<?php
include("db.php");
$qry="select * from tbgroup";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
echo "<table border=0>";
while($row=mysqli_fetch_row($result)){
echo "<tr>";
echo "<td>
<a href=groupdesc.php?gid=$row[0]><img src=$row[4] height=120 width=120></a><br><br>
</td>";
echo "<td valign=top>";
echo "<a href=groupdesc.php?gid=$row[0]><b><big> $row[1]</big> </b></a>";
echo "<br><br><b>$row[3]</b>";
echo "<br><br>CREATED BY:<a href=viewprf.php?id=$row[2]><b><big>$row[2]</big></b></a>";
echo "</td>";
echo "<td align=right width=100 valign=center>";
$qry=" select * from tbgroupmember where memberuserid='$uid' and membergid=$row[0] ";
$result1=mysqli_query($con,$qry) or die(mysqli_error($con));
$n=mysqli_num_rows($result1);
if($n>0){
echo "</b><big>joined<big></b>";
}
else{
echo "<a href=joingroup.php?gid=$row[0]><b><big>join</b></big></a>";

}

echo "</td>";
echo "</tr>";
}
echo"</table>";
?>
</div>

</body>
</html>