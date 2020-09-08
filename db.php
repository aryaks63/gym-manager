<?php
  
   $server = "localhost";
   $username = "id14798028_abc";
   $password = "H=9(\Ugv24]x[-p8";
   $dbname = "id14798028_mydb";
   
   $conn = mysqli_connect($server,$username,$password,$dbname);

   if(!$conn){
      die("Connection Failed:".mysqli_connect_error());
   }
?>