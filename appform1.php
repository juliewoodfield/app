
<?php

include("pesheader.php");
require_once("pesconnect.php");
include("pesmenu.php");
	?>
	
	<?php	$centrequery = "SELECT * FROM centrenames ORDER BY centrename";
		$centreresult = mysqli_query($link, $centrequery);
		?>
		

<h2>Demographics Form</h2>
	<form action="demographicsinput.php" method="post">
	
	<p>
		<label for="ID">ID:</label>
		<input type="text" name="ID">		
	</p>
	<p>
		<label for="sex">Sex:</label>
		<input type="radio" name="sex" value="F"/>Female
		<input type="radio" name="sex" value="M"/>Male		
	</p>
	<p>
		<label for="dob">Date of Birth</label>
		<input type="text" name="dob" placeholder="YYYYMMDD"/>
	<p>
		<label for="centre">Centre:</label>
		<select name="centres"/>
		<?php
		while ($centrerow = mysqli_fetch_array($centreresult, MYSQL_ASSOC))
		{
			?>
			<option value="<?php echo $centrerow[centreid];?>"> <?php echo $centrerow[centrename];?> </option>
<?php
}
?>
				</select>	
	</p>
		<input type="submit" value="Add Records" id="submit">
	</form>
	
	<?php
		mysqli_close($link);
		
	?>
	
	<p>
	</br>
		Demographics must be added before adding any other details.
	</p>
	</body>
	</html>