
<?php

include("appheader.html");
//require_once("pesconnect.php");
include("appmenu.html");
	?>
	
	<?php//	$centrequery = "SELECT * FROM centrenames ORDER BY centrename";
		//$centreresult = mysqli_query($link, $centrequery);
		?>
		

<h2>Registration Form</h2>
	<form action="registrationinput.php" method="post">
	
	<p>
		<label for="email">Email Address:</label>
		<input type="text" name="email">		
	</br>
	
		<label for="password1">Create password:</label>
		<input type="text" name="password1">		
	</br>
	
		<label for="password2">Repeat password:</label>
		<input type="text" name="password1">		
	</p>
	</body>
	</html>