<?php
    include 'connection.php';

    if(isset($_GET['no'])){
        $no=$_GET['no'];

        $sql="SELECT * FROM user_info WHERE No = '$no'";
        // print_r($sql);
        // exit;
        $result = $conn-> query($sql);
        $row = $result -> fetch_assoc();
            $no=$row['No'];
            $name=$row['Name'];
            $email=$row['Email'];
            $phone=$row['Phone No'];
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <p><b>NO:<?php echo $no; ?></b></p>
        <p><b>Name:<?php echo $name; ?></b></p>
        <p><b>Email:<?php echo $email; ?></b></p>
        <p><b>Phone No:<?php echo $phone; ?></b></p>
    </div>
</body>
</html>