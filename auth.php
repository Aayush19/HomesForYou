<?php
   include("connect.php");
   if(isset($_POST['login'])){
     $uname=$_POST['uname'];
     $password=$_POST['password'];
   $sql=mysqli_query($con,"select * from contact where email='$uname' AND password='$password'");
   $row=mysqli_fetch_array($sql);
   $count=mysqli_num_rows($sql);
   if($count>0){
      $_SESSION['sid']=$uname;
      header("Location:index1.php");
   }else{
     echo"Invalid User Id/Password";
    header("Location:index.php");
}
}
 ?>
