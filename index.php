
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" >
    <title>Registation from</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-4 col-11 my-5 ">

        <div class="text-center mt-5">
          <h2>Welcome </h2>
        <p>Check your Form Lorem ipsum dolor sit, amet.</p>
        <a href="display.php"><button class="btn btn-primary" >Check Form </button></a>
        </div>
        
        
      </div>
      <div class="col-md-8 col-11  ">

        <form class=" my-5 " method="Post">
      <h2 class="text-center mb-3">Apply For Web Developer Post </h2>
      <div class="row g-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name*" name="First_name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name*" name="Last_name">
        </div>
      </div>
      <div class="row g-3 mt-2">
        <div class="col">
          <input type="number" class="form-control" placeholder="Phone Number*" name="Phone_No">
        </div>
        <div class="col">
          <input type="email" class="form-control" placeholder="Enter Your Email*" name="Email">
        </div>
      </div>
      <div class="row g-3 mt-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Who Refer" name="Refer">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Job Post" name="jobpost">
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary float-right mt-3" name="submit">Register</button>
    </form>

    </div>
        

      </div>
      
    </div>


    
    
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" ></script>
  </body>
</html>


<?php 

include_once("connection.php");


if (isset($_POST["submit"])) {

  $First_name=$_POST["First_name"];
  $last_name=$_POST["Last_name"];
  $phone=$_POST["Phone_No"];
  $email=$_POST["Email"];
  $Refer=$_POST["Refer"];
  $jobpost=$_POST["jobpost"];


  $insertqueary=" INSERT INTO `regform`(`First_Name`, `Last_Name`, `phone_no`, `Email`, `Refer`, `jobpost`) VALUES ('$First_name','$last_name',' $phone','$email','$Refer','$jobpost')";

  $result=mysqli_query($con,$insertqueary);
  
  if ($result) {
    ?>
    <script>
      alert('data inser successful');
    </script>
    <?php 
    
  }
  else{

    ?>
    <script>
      alert('data inser not successful');
    </script>
    <?php 


  }
  
}

?>
  