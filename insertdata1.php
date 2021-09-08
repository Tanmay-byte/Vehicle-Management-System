<?php
session_start();
$conn=mysqli_connect("localhost","root","G@m3r0pinthechat","account");
if(mysqli_connect_errno()){
 print_r("Error: ".mysqli_connect_error());
 exit();
}

$user = $_SESSION['username'];
$insert_query="CALL insertReview('No', '$user')";
if(mysqli_query($conn,$insert_query)){
header("location:indexuser1.php");
}else{
echo "<script>
alert( 'Entry for review has already been made!' );
window.location='indexuser1.php';
</script>";
}
?>
