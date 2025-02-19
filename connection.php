<?php
  $conn=new mysqli('localhost','root','','first')or die("not connected");
  if(!$conn){
    echo "not connect";
  }
?> 