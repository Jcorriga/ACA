<?php
include('db_connect.php');
$con = mysql_connect('localhost','root','','ACA');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  mysql_select_db('ACA', $con);
  
  $sql="INSERT INTO waterTrail (name, location, length, class, scenery, camping, tripTime, description)
VALUES
('$_POST[trailName]','$_POST[value]','$_POST[trailLength]','$_POST[class1]','$_POST[scenery1]','$_POST[camping1]','$_POST[rivername]','$_POST[comments]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 trail added";

mysql_close($con)
?>