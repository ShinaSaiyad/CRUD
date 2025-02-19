<?php
  // $insert = false;
  $conn=new mysqli('localhost','root','','first')or die("not connected");
  $id=$name=$email=$num=" ";
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $num=$_POST['num'];
  }
  
  $q="INSERT INTO `user_info` (`No`, `Name`, `Email`, `Phone No`) VALUES (NULL, '$name', '$email', '$num')";
  $result=$conn->query($q);
  if($result){
    $insert = true;
  }
  else{
    echo "not inserted";
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>
<body>
  <form method='POST'>  
      <div class="heading">
        <h1>PHP CRUD Application using jQuery Ajax</h1>
      </div>
      <?php
        if($insert){
          echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>Success!</strong> Your record has been recorded successfully.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }
      ?>
      <div class="container">
      <h2>ADD USER</h2>
      <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">User Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email address</label>
      <input type="text" name="email" class="form-control" id="exampleInputPassword1">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Phone No</label>
      <input type="text" name="num" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Reset</button>
    <button type="submit" class="btn btn-primary">Cancel</button>
    <button type="submit" class="btn btn-primary">Add User</button>
  </form>
    </div>

    <!-- bootstrap js -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script> 
   
</body>
</html>