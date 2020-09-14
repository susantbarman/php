<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" >
    <title>Update form table </title>
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
          <?php
          include_once("connection.php");
          $edit=$_GET["id"];
          $showquery="select * from regform where id={$edit}";
          $showdata=mysqli_query($con,$showquery);
          $arrdata=mysqli_fetch_array($showdata);
          // $updatequery="update set from regform ";
          if (isset($_POST["submit"])) {

          $editupdate=$_GET["id"];

          $First_name=$_POST["First_name"];
          $last_name=$_POST["Last_name"];
          $phone=$_POST["phone_no"];
          $email=$_POST["Email"];
          $Refer=$_POST["Refer"];
          $jobpost=$_POST["jobpost"];
          // $insertqueary=" INSERT INTO `regform`(`First_Name`, `Last_Name`, `phone_no`, `Email`, `Refer`, `jobpost`) VALUES ('$First_name','$last_name',' $phone','$email','$Refer','$jobpost')";
          //updatequeary called
          // $updatequeary="update regform set where id={$edit},First_Name='$First_name',Last_Name='$last_name',phone_no='$phone',Email='$email',Refer='$Refer',jobpost='$jobpost'where id={$editupdate}";

         $update=" UPDATE `regform` SET `Id`={$edit},`First_Name`='$First_name',`Last_Name`='$last_name',`phone_no`='$phone',`Email`='$email',`Refer`='$Refer',`jobpost`='$jobpost' WHERE id={$editupdate}";

          $result=mysqli_query($con,$update);
          
          if ($result) {
          ?>
          <script>
          alert('data update successful');
          </script>
          <?php
          
          }
          else{
          ?>
          <script>
          alert('data update not successful');
          </script>
          <?php
          }
          
          }
          ?>
          
          
        </div>
        <div class="col-md-8 col-11  ">
          <form class=" my-5 " method="Post">
            <h2 class="text-center mb-3">Apply For Web Developer Post </h2>
            <div class="row g-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name*" name="First_name" value="<?php echo $arrdata['First_Name']; ?>">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name*" name="Last_name"value="<?php echo $arrdata['Last_Name']; ?>">
              </div>
            </div>
            <div class="row g-3 mt-2">
              <div class="col">
                <input type="number" class="form-control" placeholder="Phone Number*" name="phone_no" value="<?php echo $arrdata['phone_no']; ?>">
              </div>
              <div class="col">
                <input type="email" class="form-control" placeholder="Enter Your Email*" name="Email"value="<?php echo $arrdata['Email']; ?>">
              </div>
            </div>
            <div class="row g-3 mt-2">
              <div class="col">
                <input type="text" class="form-control" placeholder="Who Refer" name="Refer" value="<?php echo $arrdata['Refer']; ?>">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Job Post" name="jobpost" value="<?php echo $arrdata['jobpost']; ?>">
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary float-right mt-3" name="submit">Update</button>
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