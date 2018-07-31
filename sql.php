<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mail", $con);

$sql="INSERT INTO notify(mailnames)
VALUES
('$_POST[einput]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "添加成功";

mysql_close($con)
?>