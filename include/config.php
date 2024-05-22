<?php
  session_start();
  include ("masterConfig.php");

  $con = mysqli_connect($host,$username,$password,$db);
  if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }

  include ("class/queryMaster.php");
  $qm = new queryMaster();

  include ("rootMaster.php");
  include ("cusFunction.php");

  date_default_timezone_set("Asia/Kolkata");
  $getDt = date("Y-m-d H:i:s");

  $page_title = "Home";
?>