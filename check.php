<?php 

require "config.php";


 $username=$dbhandle->real_escape_string($_POST["username"]);
 
$query="SELECT * FROM new_table WHERE username='".$username."'";
$results=$dbhandle->query($query);
$numRows=$results->num_rows;

if($numRows>0){

echo "Username already exist";
echo '<script>window.location.href = "main.html";</script>';
}
else
echo "Username Available";




?>