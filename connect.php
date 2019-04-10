<?php
   session_start();
   $con=mysqli_connect("localhost","root","","homesforyou");
   if(!$con){
     echo "Connection not established";
  }
?>
