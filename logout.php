<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["uimg"]);
unset($_SESSION["gid"]);
header("location:login.html");
?>