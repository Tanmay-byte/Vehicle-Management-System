<html>
<head>
<title>MAHAVINAYAK ROADLINES</title>
  <!-- Add Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.button:hover
{
  background-color: black;
}
button
{
  background-color: #008000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
header
{
  background-color: #008000;
  top: 30;
}
.mduimage
{
  position: absolute;
  transform: translateY(-50%);
  top:60;
  left: 300;
  box-shadow:0px 0px 5px 0px #888;
}
.vertical-align {
	position: absolute;
	top: 55%;
	transform: translateY(-50%);
	left: 400;
	width: 50%;
	box-shadow:0px 0px 5px 0px #888;
	background-color:white;
}
</style>
</head>
<body background="nm.png">
<div class="mduimage">
<img src="headd.png" align="middle" height="100" width="1000"><br>
</div>
<br><br><br><br><br><br>
<header>
<button class="button" type="button" onclick="window.location.href='index.php'">Home</button>
<button class="button" type="button" onclick="window.location.href='add.php'">Add Accounts</button>
<button class="button" type="button" onclick="window.location.href='edit.php'">Edit Accounts</button>
<button class="button" type="button" onclick="window.location.href='view.php'">View</button>
<button class="button" type="button" onclick="window.location.href='add1.php'">Add Vehicle and company name</button>
</header>
<?php
$date = filter_input(INPUT_POST, 'date');
$vehicle = filter_input(INPUT_POST, 'vehicle');
$company = filter_input(INPUT_POST, 'company');
$too = filter_input(INPUT_POST, 'too');
$material = filter_input(INPUT_POST, 'material');
$weight= filter_input(INPUT_POST, 'weight');
$freight = filter_input(INPUT_POST, 'freight');
$loading = filter_input(INPUT_POST, 'loading');
$weightment = filter_input(INPUT_POST, 'weightment');
$unloading = filter_input(INPUT_POST, 'unloading');
$store = filter_input(INPUT_POST, 'store');
$other = filter_input(INPUT_POST, 'other');
$total = filter_input(INPUT_POST, 'total');
$advance = filter_input(INPUT_POST, 'advance');
$balance = filter_input(INPUT_POST, 'balance');
$remark = filter_input(INPUT_POST, 'remark');
$advancetype = filter_input(INPUT_POST, 'advancetype');
$commission = filter_input(INPUT_POST, 'commission');
$cashmode = filter_input(INPUT_POST, 'cashmode');
$status ="complete";
if (!empty($vehicle)){
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
$sql = "insert into main ( vehicle) values('$vehicle')";

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

?>
<div class="vertical-align">
<center><table><tr><td><h3>The Details has been added succesfully</h3></td></tr></table><center>
<div>
</body>
</html>
