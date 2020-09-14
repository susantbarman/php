<?php

include'connection.php';
$dltid=$_GET["dl"];

$deletequery="delete from regform where id={$dltid}";

$query=mysqli_query($con,$deletequery);

if ($query) {
	?>
	<script>
		alert('Data delete sucessful');
	</script>
	<?php
	header("location:display.php");
	
}
else{

	?>
	<script>
		alert('Data delete Not sucessful');

	</script>
	<?php

	header("location:display.php");

	
}




?>