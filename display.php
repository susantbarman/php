<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" >
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>show data table</title>
  </head>
  <body>

  	<table class="table w-75 mx-auto">
  		<h2 class="text-center">Form Data Table</h2>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Email</th>
      <th scope="col">Refer</th>
      <th scope="col">jobpost</th>
      <th colspan="2">Operation </th>
    </tr>
  </thead>
  <tbody>
  	<?php 

include_once('connection.php');

$selectquery="select * from regform";
$query=mysqli_query($con,$selectquery);

// $result=mysqli_fetch_array($query)


while ($result=mysqli_fetch_array($query)){
	?>

	<tr>
		<th scope="row"><?php echo $result['Id']; ?></th>
		<td><?php echo $result['First_Name']; ?></td>
		<td><?php echo $result['Last_Name']; ?></td>
		<td><?php echo $result['phone_no']; ?></td>
		<td><?php echo $result['Email']; ?></td>
		<td><?php echo $result['Refer']; ?></td>
		<td><?php echo $result['jobpost']; ?></td>
        <td><a href="update.php?id=<?php echo $result['Id']; ?>" data-toggle="tooltip"data-placement="right" title="Update!"><i class='fas fa-edit' style='font-size:24px;color:green';></i></a></td>
        <td><a href="delete.php?dl=<?php echo $result['Id']; ?>" data-toggle="tooltip"data-placement="right" title="Delete!"><i class='fas fa-trash' style='font-size:24px;color:red';></i></a></td>
      
      
    </tr>
    


	<?php
    
}


?>
    
  </tbody>
</table>
    

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" ></script>
  </body>
</html>

