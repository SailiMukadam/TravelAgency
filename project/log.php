<?php
  session_start();
  $connect = new mysqli('localhost','root','','login');
  if($connect->connect_error){
    die('connection failed');
  }else
  echo 'connect succesfull';

  $username= $_POST['username'];
  $password= $_POST['password'];

  //echo $username;

  $sql="SELECT name FROM users WHERE username='$username' AND password='$password'";

  $result=$connect->query($sql);

  if($result-> num_rows>0){
    while($row=$result->fetch_assoc()){
        $_SESSION['username'] = $username;
        header("location: http://localhost/project/index.php");
    }

  }






?>
