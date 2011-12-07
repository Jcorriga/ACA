

<?php
	include('db_connect.php');
/*	
	$con = mysql_connect('localhost','root','','ACA');
	if (!$con) {
  		die('Could not connect: ' . mysql_error());
  	}

*/  

	$name = $_POST[trailName];
	$location = $_POST[location];
	$state = $_POST[state];
	$length = $_POST[trailLength];
	$class = $_POST[class1];
	$scenery = $_POST[scenery1];
	$camping = $_POST[camping1];
	$tripTime = $_POST[tripTime];
	$description = $_POST[description];
	$trailImage = $_POST[trailImage];
	$river = $_POST[river];
	$startLocation = $_POST[trailStart];
	$endLocation = $_POST[trailEnd];
	$usgsLink = $_POST[usgsLink];
	$link1 = $_POST[link1];
	$link2 = $_POST[link2];
	$link3 = $_POST[link3];
	$link4 = $_POST[link4];
	$link5 = $_POST[link5];
	$link6 = $_POST[link6];
	$link7 = $_POST[link7];
	$title1 = $_POST[title1];
	$title2 = $_POST[title2];
	$title3 = $_POST[title3];
	$title4 = $_POST[title4];
	$title5 = $_POST[title5];
	$title6 = $_POST[title6];
	$title7 = $_POST[title7];

	
  	$sql="INSERT INTO waterTrail 
  			(name, location, state, length, class, scenery, camping, tripTime,
  			description, trailImage, river, startLocation, endLocation, usgsLink)
		VALUES
	('$name','$location','$state','$length',
	'$class','$scenery','$camping','$tripTime',
	'$description', '$trailImage','$river','$startLocation',
	'$endLocation','$usgsLink')";
	$result = mysqli_query($db, $sql) or die("Error!!!");
	$query = "SELECT * FROM waterTrail w WHERE w.name='$name'";
	$result = mysqli_query($db, $query) or die("Error 2!!!");
	$row = mysqli_fetch_array($result);
	$index = $row['index'];
	if ($link1 != ""){
		$sql="INSERT INTO links (waterTrail, title, address) VALUES ('$index', '$title1', '$link1')";
		$result = mysqli_query($db, $sql) or die("Error!!!");
	}
	if ($link2 != ""){
		$sql="INSERT INTO links (waterTrail, title, address) VALUES ('$index', '$title2', '$link2')";
		$result = mysqli_query($db, $sql) or die("Error!!!");
	}
	if ($link3 != ""){
		$sql="INSERT INTO links (waterTrail, title, address) VALUES ('$index', '$title3', '$link3')";
		$result = mysqli_query($db, $sql) or die("Error!!!");
	}
	if ($link4 != ""){
		$sql="INSERT INTO links (waterTrail, title, address) VALUES ('$index', '$title4', '$link4')";
		$result = mysqli_query($db, $sql) or die("Error!!!");
	}
	if ($link5 != ""){
		$sql="INSERT INTO links (waterTrail, title, address) VALUES ('$index', '$title5', '$link5')";
		$result = mysqli_query($db, $sql) or die("Error!!!");
	}
	if ($link6 != ""){
		$sql="INSERT INTO links (waterTrail, title, address) VALUES ('$index', '$title6', '$link6')";
		$result = mysqli_query($db, $sql) or die("Error!!!");
	}
	if ($link7 != ""){
		$sql="INSERT INTO links (waterTrail, title, address) VALUES ('$index', '$title7', '$link7')";
		$result = mysqli_query($db, $sql) or die("Error!!!");
	}
	//	mysql_close($db);
echo "Trail added!!! View <a href='waterTrailsPanel.php?index=" . $index . "'>edited page</a>";


?>