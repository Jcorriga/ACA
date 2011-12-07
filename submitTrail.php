<style type="text/css">
#centerContainer{
	width:606px;
	margin-right: auto;
	margin-left: auto;
}
</style>

<html>
<body>
<div id='centerContainer'>

<form action ="insert.php" method="post">
<?php
		$state = $_GET["state"];
		echo "<input type='hidden' name='state' value='" . $state . "' />";
?>
<table width="450px" >
<tr>
	<td><label for="trailname"><b>Trail Name</b></label><br /> <input type="text" name="trailName"/><br /></td>
	<td><label for="rivername"><b>River</b></label><br /> <input type="text" name="river"/><br /></td>
	<td><label for="rivername"><b>Location</b></label><br /> <input type="text" name="location"/><br /></td>
</tr>
<tr>
	<td colspan="4" style="text-align: center">
		<label for="traildescription"><b>Trail Description</b></label>
		<br /><textarea name ="description" maxlength="1000" cols="70" rows="6"></textarea>
	</td>
</tr>
<tr>
	<td>
		<label for="class"><b>Class</b></label><br />
		<input type="radio" name="class1" value ="1">1<br />
		<input type="radio" name="class1" value ="2">2<br />
		<input type="radio" name="class1" value ="3">3<br />
		<input type="radio" name="class1" value ="4">4<br />
		<input type="radio" name="class1" value ="5">5<br />
	</td>

	<td>
		<label for="camping"><b>Camping</b></label><br />
		<input type="radio" name="camping1" value ="Yes">Yes<br />
		<input type="radio" name="camping1" value ="No">No<br />

	</td>

	<td>
		<label for="views"><b>Scenery</b></label><br />
		<input type="radio" name="scenery1" value ="None">None<br />
		<input type="radio" name="scenery1" value ="Average">Average<br />
		<input type="radio" name="scenery1" value ="Good">Good<br />
		<input type="radio" name="scenery1" value ="Great">Great<br />
	</td>
</tr>
<tr>
	<td>
		<label for="usgslink"><b>USGS Link</b></label><br /> <input type="text" name ="usgsLink"/><br /></td>
	</td>
	<td>
		<label for="triptime"><b>Trip Time</b></label><br /> <input type="text" name ="tripTime"/><br /></td>
	</td>
	<td>
		<label for="traillength"><b>Trail Length</b></label><br /> <input type="text" name="trailLength"/><br /></td>
		
</tr>
<tr>
	<td>
		<label for="trailstart"><b>Trail Start</b></label><br /> <input type="text" name="trailStart"/><br />
		<label for="trailend"><b>Trail End</b></label><br /> <input type="text" name="trailEnd"/><br />	
		<label for="photo"><b>IMG Url</b></label><br /> <input type="text" name="trailImage"/><br />	
		<button>Additional Photos</button>	
	</td>
	<td>
		<label for="links"><b>Link</b></label><br />
		<input type="text" name="link1"/><br />
		<input type="text" name="link2"/><br />
		<input type="text" name="link3"/><br />
		<input type="text" name="link4"/><br />
		<input type="text" name="link5"/><br />
		<input type="text" name="link6"/><br />
		<input type="text" name="link7"/><br />
	</td>
	<td>
		<label for="titles"><b>Link Title</b></label><br />
		<input type="text" name="title1"/><br />
		<input type="text" name="title2"/><br />
		<input type="text" name="title3"/><br />
		<input type="text" name="title4"/><br />
		<input type="text" name="title5"/><br />
		<input type="text" name="title6"/><br />
		<input type="text" name="title7"/><br />
	</td>
</tr>
<tr>
	<td colspan="4" ><input type="submit" value="Submit"></td>
</tr>

</table>
</form>
</div>
</body>
</html>