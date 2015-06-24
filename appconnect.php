<!-- Connect to pes database -->
<?php
$link = mysqli_connect("localhost", "root", "", "pes");
if ($link == false)
{
	die ("ERROR: Could not connect." . mysqli_connect_error());	
}
?>
