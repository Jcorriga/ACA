<style type="text/css">

#centerContainer{
	width:606px;
	position: relative;
	margin-left:auto; 
	margin-right:auto;
}
#trailHeader{
	width:100%;
	padding: 10px;
	text-align: center;
	height: 150px;
	font-family: Arial,Helvetica,Verdana,sans-serif;
	color: #0046E3;
	background: gainsboro;
	
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
	font-family: Arial,Helvetica,Verdana,sans-serif;
	color: #666;
	font-size: 12px;
	line-height: 1.25em;
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
	text-align: right;
}	
#links{
	padding: 10px;
	float: left;	
}
#text1{
font-family: Arial,Helvetica,Verdana,sans-serif;
color: #666;
font-size: 16px;
line-height: 1.25em;
}
#text2{
font-family: Arial,Helvetica,Verdana,sans-serif;
color: #666;
font-size: 12px;
line-height: 1.25em;
background: gainsboro;
}
#header{
font-family: Arial,Helvetica,Verdana,sans-serif;
color: #0046E3;
font-size: 16px;
}
#header2{
font-family: Arial,Helvetica,Verdana,sans-serif;
color: #0046E3;
font-size: 15px;
font-weight:bold;
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


echo
	"<div id='trailHeader'>
		<div id='trailName'>
			<h1>" . $name . "</h1>
        	<h3>" . $location . "</h3>
		</div> 
        <div id='paddleRating'>
        	<br />
        	<table id='header'>
            	<th>Length</th>
                <th>Class</th>
                <th>Scenery</th>
                <th>Camping</th>
                <tr id='text1'>
                	<td>" . $length . " miles</td>
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
		<table id='text2'>
    			<th id='header'>Helpful Links</th>
     		   <tr><td>USGS at closest location</td></tr>
     		   <tr><td>Local River orginazition</td></tr>
    		    <tr><td>Maps</td></tr>
		  </table>
		  </div>
		  <form action='http://maps.google.com/maps' method='post' target='_blank'>
			<span id='header2'> Enter your starting address:</span>
			<input type='text' name='saddr' />
			<input type='hidden' name='daddr' value='" . test . "' />
			<input type='submit' value='get directions to Dropoff' />
			<input type='submit' value='get directions to Pickup' />
		</form>
		</div>
	</div>
</div>";

?>
</body>
</html>
