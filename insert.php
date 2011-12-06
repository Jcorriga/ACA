<?php
	include('db_connect.php');
/*	
	$con = mysql_connect('localhost','root','','ACA');
	if (!$con) {
  		die('Could not connect: ' . mysql_error());
  	}

*/  
  	$sql="INSERT INTO waterTrail 
  			(name, location, state, length, class, scenery, camping, tripTime,
  			description, trailImage, river, startLocation, endLocation, usgsLink)
		VALUES
	('$_POST[trailName]','$_POST[location]','$_POST[state]','$_POST[trailLength]',
	'$_POST[class1]','$_POST[scenery1]','$_POST[camping1]','$_POST[tripTime]',
	'$_POST[description]', 'imageUrl','$_POST[river]','$_POST[trailStart]',
	'$_POST[trailEnd]','$_POST[usgsLink]')";
	echo $sql;
	$results = mysqli_query($db, $sql) or die("Error!!!");

	echo "1 trail added";

mysql_close($db);
?>