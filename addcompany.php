
<?php 
$company = filter_input(INPUT_POST, 'company');
if (!empty($company)){
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
$sql = "INSERT INTO company (company)
values ('$company')";
if ($conn->query($sql)){
echo "SUccess";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
header('location:tan.html');
?>


