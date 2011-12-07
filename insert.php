

<?php
	include('db_connect.php');
/*	
	$con = mysql_connect('localhost','root','','ACA');
	if (!$con) {
  		die('Could not connect: ' . mysql_error());
  	}

*/  

	$name = $_POST[trailName];
	echo $name . "br/";
	$location = $_POST[location];
	$state = $_POST[state];
	$length = $_POST[trailLength];
	$class = $_POST[class1];
	$scenery = $_POST[scenery1];
	$camping = $_POST[camping1];
	$tripTime = $_POST[tripTime];
	$description = $_POST[description];
//	$trailImage = $_POST[trailImage]
	$river = $_POST[river];
	$startLocation = $_POST[trailStart];
	$endLocation = $_POST[trailEnd];
	$usgsLink = $_POST[usgsLink];
	
  	$sql="INSERT INTO waterTrail 
  			(name, location, state, length, class, scenery, camping, tripTime,
  			description, trailImage, river, startLocation, endLocation, usgsLink)
		VALUES
	('$_POST[trailName]','$_POST[location]','$_POST[state]','$_POST[trailLength]',
	'$_POST[class1]','$_POST[scenery1]','$_POST[camping1]','$_POST[tripTime]',
	'$_POST[description]', 'imageUrl','$_POST[river]','$_POST[trailStart]',
	'$_POST[trailEnd]','$_POST[usgsLink]')";
	$result = mysqli_query($db, $sql) or die("Error!!!");
	$query = "SELECT * FROM waterTrail w WHERE w.name='$name'";
	$result = mysqli_query($db, $query) or die("Error 2!!!");
	$row = mysqli_fetch_array($result);
	$index = $row['index'];
	echo $index;

	//	mysql_close($db);
	echo $id;


?>