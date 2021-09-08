 <?php
 //login_success.php
 session_start();
 if(isset($_SESSION["username"]))
 {

      header("location:indexuser.php");  
 }
 else
 {
      header("location:pdo_login.php");
 }
 ?>
