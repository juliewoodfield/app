
<?php

include("pesheader.php");
require_once("pesconnect.php");
include("pesmenu.php");
	?>

<h2>Demographics Form</h2>
<p id="returntext">
<?php

$ID = $_POST['ID'];
$sex = $_POST['sex'];
$centre = $_POST['centres'];
$dob = $_POST['dob'];
	
$sqldemo = "INSERT INTO demographics (id, dob, sex, centre) VALUES ('$ID', $dob, '$sex', '$centre')";

if(mysqli_query($link, $sqldemo))
{
	echo "Demographics added successfully.";
}
else
{echo "ERROR: Not able to execute $sql." . mysqli_error($link);
}

mysqli_close($link);

?>
</p>
	<p>
	</br>
</br>
To continue with data input, select an option below:
</br>
</br>
		<a href="backgroundform.php" id=next>Add Background Details</a>
	</p>
</body>
</html>
