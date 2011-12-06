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
<table width="450px">
<tr>
	<td><label for="trailname"><b>Trail Name</b></label><br /> <input type="text" name="trailName"/><br /></td>
	<td><label for="rivername"><b>River</b></label><br /> <input type="text" name="rivername"/><br /></td>
	<td>
<?php
		$state = $_GET["state"];
		echo "<input type='hidden' name='state' value='" . $state . "' />";
?>
	</td>
</tr>
<tr>
	<td colspan="4" style="text-align: center">
		<label for="traildescription"><b>Trail Description</b></label>
		<br /><textarea name ="comments" maxlength="1000" cols="70" rows="6"></textarea>
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
	<td colspan="2">
		<button>Submit Photos</button>
	</td>
	<td>
		<button>Add Google Map</button>
	</td>
</tr>
<tr>
	<td>
		<label for="trailstart"><b>Trail Start</b></label><br /> <input type="text" name="trailStart"/><br /></td>
	</td>
	<td>
		<label for="trailend"><b>Trail End</b></label><br /> <input type="text" name="trailEnd"/><br /></td>
	</td>
	<td>
		<label for="traillength"><b>Trail Length</b></label><br /> <input type="text" name="trailLength"/><br /></td>
</tr>
<tr>
	<td>
		<label for="triptime"><b>Trip Time</b></label><br /> <input type="text" name ="tripTime"/><br /></td>
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