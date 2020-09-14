<?php
$host="localhost";
$user="root";
$pass="";
$db="aaa";

$con=mysqli_connect($host,$user,$pass,$db);

if ($con) {

	?>
	<script>
		alert("Connection successful");
	</script>
	<?php

	
}
else {
	?>
	<script>
		alert("Connection Not successful");
	</script>
	<?php
}


?>