<style type="text/css">

#centerContainer{
	width:606px;
	position: relative;
	margin-left:auto; 
	margin-right:auto;
}
#stateCenterContainer{
	width:606px;
	position: relative;
	text-align: center;
	margin-left:auto; 
	margin-right:auto;
}

#stateTable th, td {
text-align: center;
padding: 10px;

}

#stateCenterContainer img{
	padding:20px;
}
#trailHeader{
	width:100%;
	padding: 10px;
	text-align: center;
	height: 150px;
}
#trailName{
	float: left;
	width: 40%;
}
#trailImage{
	width: 250px;
	float: left;
	padding: 10px;
	padding-right: 20px;
}
#paddleRating{
	float: right;
	text-align:center;
}
#trailContent{
	padding: 10px;
}
#paddleRating th{
	padding-left: 10px;
	padding-right:10px;
	font-size:18px;	
}
#paddleRating td{
	text-align: center;	
}
#trailLinks{
	width: 100%;
}	
#links{
	float: left;	
}

#header{
	font-family: Arial,Helvetica,Verdana,sans-serif;
	font-size:15px;
	color: #0046E3;
	text-align:center;	
	font-weight: bold;
	
}

#text{
font-family: Arial,Helvetica,Verdana,sans-serif;
color: #666;
font-size: 12px;
line-height: 1.25em;
}

</style>

<html>
<?php
	include('db_connect.php'); 
?>
<body>
<div id="stateCenterContainer">
<img src='stateImageHolder.jpg' />

<?php
		$state = $_GET["state"];
	  	$query = "SELECT * from waterTrail w WHERE w.state = '$state'";
	  	$result = mysqli_query($db, $query)
   					or die("Error Querying Database1");
//   		$row = mysqli_fetch_array($result);

echo "<table id='stateTable'>
		<tr id='header'>
			<th>Trail Name</th>
			<th>Length</th>
			<th>Trip Time</th>
			<th>Class</th>
			<th>Scenery</th>
			<th>Camping</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
			$index = $row['index'];
			$name = $row['name'];
			$length = $row['length'];
			$class = $row['class'];
			$scenery = $row['scenery'];
			$camping = $row['camping'];
			$tripTime = $row['tripTime'];
echo		"<tr id='text'>
				<td><a href='waterTrailsPanel.php?index=" . $index . "'>" . $name . "</a></td>
				<td>" . $length . " miles</td>
				<td>" . $tripTime . "</td>
				<td>" . $class . "</td>
				<td>" . $scenery . "</td>
				<td>" . $camping . "</td>";
		}
		echo "<br /><a href='submitTrail.php?state=" . $state . "'>Add a Trail</a>";
		?>
</body>
</html>
