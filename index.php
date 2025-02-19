<?php
  require 'connection.php';
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD-operation</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <div class="heading">
      <h1>PHP CRUD Application using jQuery Ajax</h1>
    </div>
    <div class="container">
      <div class="wrapper">
        <div class="link">
          <button type="button" class="btn btn-primary">
            <a href="add.php">Add User</a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
              <path
                d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"
              />
            </svg>
          </button>
        </div>
        <form action="">
            <div class="search">
              <div class="icon">            
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path
                fill="black"
                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
            </svg>
          </div>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Search">
            </div>
      </div>
      <div class="display-table">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone No</th>
              <th scope="col">Operation
                
              </th>
            </tr>
            <!-- <tr>
              <td><a href="edit.php">Edit</a>
                <a href="edit.php">View</a>
                <a href="edit.php">Delete</a></td>
            </tr> -->  
          </thead>
          <!-- <tbody>
            
          </tbody> -->
          <?php
            $sql="SELECT * FROM user_info";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
            ?>
            <tr>
              <td><?php echo $row['No'];?></td>
              <td><?php echo $row['Name'];?></td>
              <td><?php echo $row['Email'];?></td>
              <td><?php echo $row['Phone No'];?></td>
                <td><a href='edit.php?no=<?php echo $row['No'];?>'class='btn btn-secondary'>Edit</a>
                  <a href='view.php?no=<?php echo $row['No'];?>' class='btn btn-primary'>View</a>
                  <a href='delete.php?no=<?php echo $row['No'];?>' class='btn btn-danger'>Delete</a></td>
              </button>
            </tr>
            <?php
             }
            ?>


        </table>
      </div>
    </div>
    <!-- bootstrap js -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
