<?php
$id = filter_input(INPUT_POST, 'id');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "G@m3r0pinthechat";
$dbname = "account";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO new_table (username, password)
values ('$username','$password')";
if ($conn->query($sql)){    
echo "SUccess";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
} }
else{
    header('location:pdo_login.php');
die();
} }
else{
    header('location:pdo_login.php');
die();
}
header('location:pdo_login.php');
?>

