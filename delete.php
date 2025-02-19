<?php
  $conn=new mysqli('localhost','root','','first');
  $redirect_url='index.php';
  if(isset($_GET['no'])){
    $no=$_GET['no'];
    $sql="DELETE FROM user_info WHERE `No` = '$no'";
    $result=$conn->query($sql);     
    if($result){
      header("location:./" . $redirect_url);
    }
  }

  
             

?>
