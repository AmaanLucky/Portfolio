<?php
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $conn=new mysqli('localhost','root','','form');
  if($conn->connect_error){
    die('Connection Failed....'.$conn->connect_error);
  }
  else{
    $stat=$conn->prepare("insert into form(Name,Email,Message) values(?,?,?)");
    $stat->bind_param("sss",$name,$email,$msg);
    $stat->execute();
    echo "Successfully Registered......";
    $stat->close();
    $conn->close();
  }
?>