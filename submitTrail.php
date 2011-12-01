<style type="text/css">
#centerContainer{
	width:606px;
	
}
</style>

<html>
<body>
<div id='centerContainer'>

<form action ="insert.php" method="post">
<table width="450px">
<tr>
<td>
<label for="trailname"><b>Trail Name</b></label><br /> <input type="text" name="trailName"/><br /></td>
<td>
<label for="rivername"><b>River</b></label><br /> <input type="text" name="rivername"/><br /></td>
<td>
<label for="statename"><b>State</b></label><br />
<select>
    <option value = "AL">Alabama</option>
    <option value = "AK">Alaska</option>
    <option value = "AZ">Arizona</option>
    <option value = "AR">Arkansas</option>
    <option value = "CA">California</option>
    <option value = "CO">Colorado</option>
    <option value = "CT">Connecticut</option>
    <option value = "DE">Deleware</option>
    <option value = "FL">Florida</option>
    <option value = "GA">Georgia</option>
    <option value = "HI">Hawaii</option>
    <option value = "ID">Idaho</option>
    <option value = "IL">Illinois</option>
    <option value = "IN">Indiana</option>
    <option value = "IA">Iowa</option>
    <option value = "KS">Kansas</option>
    <option value = "KY">Kentucky</option>
    <option value = "LA">Louisiana</option>
    <option value = "ME">Maine</option>
    <option value = "MD">Maryland</option>
    <option value = "MA">Massachusetts</option>
    <option value = "MI">Michigan</option>
    <option value = "MN">Minnesota</option>
    <option value = "MS">Mississippi</option>
    <option value = "MO">Missouri</option>
    <option value = "MT">Montana</option>
    <option value = "NE">Nebraska</option>
    <option value = "NV">Nevada</option>
    <option value = "NH">New Hampshire</option>
    <option value = "NJ">New Jersey</option>
    <option value = "NM">New Mexico</option>
    <option value = "NY">New York</option>
    <option value = "NC">North Carolina</option>
    <option value = "ND">North Dakota</option>
    <option value = "OH">Ohio</option>
    <option value = "OK">Oklahoma</option>
    <option value = "OR">Oregon</option>
    <option value = "PN">Pennsylvania</option>
    <option value = "RI">Rhode Island</option>
    <option value = "SC">South Carolina</option>
    <option value = "SD">South Dakota</option>
    <option value = "TN">Tennessee</option>
    <option value = "TX">Texas</option>
    <option value = "UT">Utah</option>
    <option value = "VT">Vermont</option>
    <option value ="VA">Virginia</option>
    <option value = "WA">Washington</option>
    <option value = "WV">West Virginia</option>
    <option value = "WI">Wisconsin</option>
    <option value = "WY">Wyoming</option>
</select>
</td>
</tr>
<tr>
<td colspan="4" style="text-align: center">
<label for="traildescription"><b>Trail Description</b></label><br />
<textarea name ="comments" maxlength="1000" cols="100" rows="6"></textarea>
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
<td>
<td colspan="4" >
<input type="submit" value="Submit">  
</td>
</tr>

</table>
</form>
</div>
</body>
</html>