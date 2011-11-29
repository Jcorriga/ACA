<style type="text/css">

#centerContainer{
	width:606px;
	position: relative;
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
}
#paddleRating{
	float: right;
	text-align:center;
}
#trailContent{
	
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

</style>

<html>
<?php
	include('db_connect.php'); 
?>
<body>
<div id="centerContainer">
<?php
		$index = $_GET["index"];
	  	$query = "SELECT * from waterTrail w WHERE w.index = '$index'";
	  	$result = mysqli_query($db, $query)
   					or die("Error Querying Database1");
   		$row = mysqli_fetch_array($result);
		$name = $row['name'];
		$location = $row['location'];
		$length = $row['length'];
		$class = $row['class'];
		$scenery = $row['scenery'];
		$camping = $row['camping'];
		$tripTime = $row['tripTime'];
		$description = $row['description'];
		$trailImage = $row['trailImage'];

echo	"<div id='trailHeader'>
		<div id='trailName'>
			<h1>" . $name . "</h1>
        	<h3>" . $location . "</h3>
		</div> 
        <div id='paddleRating'>
        	<br />
        	<table>
            	<th>Length</th>
                <th>Class</th>
                <th>Scenery</th>
                <th>Camping</th>
                <tr>
                	<td>" . $length . "</td>
                    <td>" . $class . "*</td>
                    <td>" . $scenery . "</td>
                    <td>" . $camping . "</td>
                </tr>
            </table>
            <p>* Class varies with water conditions<br />
            Be sure to check water contidions with USGS</p>
    	</div>
	</div>
<div id='trailContent'>
  		<img src=" . $trailImage . " id='trailImage'>
    	<p>Estimated Trip Time: " . $tripTime . "</p>"
  		. $description . 
	"</div>
    <div id='trailLinks'>
		<div id='links'>
		<table>
    			<th>Helpful Links</th>
     		   <tr><td>USGS at closest location</td></tr>
     		   <tr><td>Local River orginazition</td></tr>
    		    <tr><td>Maps</td></tr>
		  </table>
		</div>
	</div>
</div>";

?>
</body>
</html>