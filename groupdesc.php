<?php
session_start();
if(!isset($_SESSION["uid"] ) )
  {
    header("location: login.html");
  }
else
{
?>

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
.style5 {
	font-size: medium;
}
.style6 {
	font-size: large;
	color: #800000;
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
        <form method="post" id="search" action="psearch.php">
          <span>
          <input type="text" placeholder="search.." name="text" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" class="btn"  />
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
          <li><a href="gallery2.php">gallery</a></li>
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
  <?php
$gid=$_GET["gid"];  
  ?>
</div>
<?php
//session_start();
$uid=$_SESSION["uid"];
$uimg=$_SESSION["uimg"];
$_SESSION["gid"]=$gid;
?>
<div style="position: absolute; width: 265px; height: 450px; z-index: 1; left: 166px; top: 396px" id="layer1">
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
 <div style="position: absolute; width: 239px; height: 218px; z-index: 1; left: 3px; top: 3px" id="layer4">
	
&nbsp;<div style="position: absolute; width: 223px; height: 60px; z-index: 1; left: 7px; top: 135px" id="layer6" class="style5">
	&nbsp;<strong>welcome:<?php echo "$uid"; ?> </strong></div>
&nbsp;<img src="<?php echo $uimg; ?>" height="123" width="170" /><br />
<br />
</div>
</div>
<div style="position: absolute; width: 241px; height: 255px; z-index: 2; left: 172px; top: 628px" id="layer3" class="style1">
&nbsp;<a href="editprf1.php">EDIT PROFILE</a><br />
<br />
&nbsp;<a href="editpic1.php">EDIT PROFILE PIC</a><br />
	<br />
&nbsp;<a href="editpwd1.php">EDIT PASSWORD</a><br />
	<br />
&nbsp;<a href="editsec1.php">EDIT SECURITY SETTINGS</a><br />
<br />
&nbsp;</div>

<div style="position: absolute; width: 912px; height: 687px; z-index: 3; left: 575px; top: 384px" id="layer5" class="style6">
<?php
include ("db.php");

$qry=" select * from tbgroup where groupid=$gid  ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$row=mysqli_fetch_row($result);
echo "<table border=0>";
echo "<tr>";
echo "<td>
<img src=$row[4] height=120 width=120><br><br>
</td>";
echo "<td valign=top>";
echo "<b><big> $row[1]</big> </b>";
echo "<br><br><b>$row[3]</b>";
echo "<br><br>CREATED BY:<a href=viewprf.php?id=$row[2]><b><big>$row[2]</big></b></a>";
echo "</td>";
echo "</tr>";
echo "</table>";
?><br/><br/>
<strong><span class="style3">group members:</span></strong>
<br/>
<?php
$qry=" select b.userimg,a.memberuserid from tbgroupmember a, tbuser b where a.membergid=$gid and a.memberuserid=b.userid  ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
echo "<table border=0>";
echo "<tr>";
while($row=mysqli_fetch_row($result)){
echo "<td width=70 align=left>&nbsp;&nbsp;&nbsp;
<img src=$row[0] height=60 width=70> user:<a href=viewprf.php?id=$row[1]>$row[1]</a>&nbsp;&nbsp;&nbsp;&nbsp;
</td>";
}
echo "</tr>";
echo "</table>";
?>
<br/><br/>
<span class="style3"><strong>available blogs:
</strong></span><br/><br/>
<?php
$qry=" select * from tbtopic where topicgid=$gid ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
echo "<table border=0 cellspacing=5>";
while($row=mysqli_fetch_row($result)){
echo "<tr>";
echo "<td><a href=readblog.php?tid=$row[0]>$row[1]</a>:<font color=blue><b>$row[2]<b></font>
      <br><small><small>created by:<b>$row[5]
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><small>$row[3]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$row[4]</small></small></b></small></small></td>";
echo "</tr>";
}
echo "</table><br><br>";

?>
<a href="createnewblog.php"><input type="submit" value="create blog"></a>

</div>


</body>
</html>

<?php
}
?>