<html>
<title>MAHAVINAYAK ROADLINES</title>
  <!-- Add Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>

input[type=submit] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=text] {


  margin: 8px 0;
  box-sizing: border-box;
  border-color:  green;
  border-radius: 1px;
}

body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
 .tab1 {
            tab-size: 2;
        }
.w3-button
{
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button:hover
{
  background-color: black;
}
table
{
	padding: 10px;

}
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
.bg {
  background-image: url(""headd.png"");

  height: 50%;

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
<form align="right" name="form1" method="post" action="logout.php">
  <label>
  <input name="submit2" type="submit" id="submit2" value="Logout">
  </label>
</form>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-100"><b>
  </div>
  <div class="w3-bar-block">
<br>
  <a href="#" onclick="window.location.href='index.php'" class="w3-bar-item w3-button  w3-hover-white">Home</a>
  <a href="#showcase" onclick="window.location.href='dbc.php'"class="w3-bar-item w3-button  w3-hover-white">Add Accounts</a>
  <a href="#services" onclick="window.location.href='editnew.php'"class="w3-bar-item w3-button  w3-hover-white">Edit Accounts</a>
  <a href="#designers" onclick="window.location.href='view.php'"class="w3-bar-item w3-button  w3-hover-white">View</a>
  <a href="#packages" onclick="window.location.href='cb.php'"class="w3-bar-item w3-button  w3-hover-white">Company Balance</a>
  <a href="#contact" onclick="window.location.href='addv.html'"class="w3-bar-item w3-button  w3-hover-white">Add Vehicle  name</a>
  <a href="#contact1" onclick="window.location.href='addc.html'"class="w3-bar-item w3-button w3-hover-white">Add Company name</a>
  <a href="#contact2" onclick="window.location.href='removevehicle.php'"class="w3-bar-item w3-button w3-hover-white">Remove Vehicle name</a>
  <a href="#contact2" onclick="window.location.href='deletecompany.php'"class="w3-bar-item w3-button w3-hover-white">Remove Company name</a>
  <a href="#contact2" onclick="window.location.href='user.php'"class="w3-bar-item w3-button w3-hover-white">Users</a>
</div>
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">???</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <div class="w3-container" style="margin-top:50px" id="showcase">
	<br>
	<h1 class="w3-xxxlarge"><b>Mahavinayak Roadlines</b></h1>
    <h3 class="w3-xlarge w3-text-green"><b>India's No.1 truck services</b></h3><br>

  <h1 align="left">Edit Accounts</h1>
  <hr style="width:235px;border:5px solid green" class="w3-round">

  <br>
  <br>
  <form action="" method="POST">
    <input type="text" name="sno" placeholder="Enter Serial No."/><br><br>
    <?php
  echo "<select name='vehicle'>";
  $conn=mysqli_connect("localhost","root","G@m3r0pinthechat","account");
$sqli = "SELECT* FROM vehicle";
  $resulti = mysqli_query($conn, $sqli);
while($rowi = mysqli_fetch_assoc($resulti)) {
  echo "<option value=".$rowi['vehicle'].">".$rowi['vehicle']."<option>";
}
echo "</select>";
  ?><br>
  <br>
  <?php
echo "<select name='company'>";
$conn=mysqli_connect("localhost","root","G@m3r0pinthechat","account");
$sqli = "SELECT* FROM company";
$resulti = mysqli_query($conn, $sqli);
while($rowi = mysqli_fetch_assoc($resulti)) {
echo "<option value=".$rowi['company'].">".$rowi['company']."<option>";
}
echo "</select>";
?><br>


<br>

  <input type="submit" name="update" value="Update Data"/>
  </form>
</body>
</html>
<?php
$conn =mysqli_connect("localhost","root","G@m3r0pinthechat","account");
if(isset($_POST['update']))
{
  $sno=$_POST['sno'];
  $vehicle=$_POST['vehicle'];
  $company=$_POST['company'];
  $invoiceno=$_POST['invoice'];

  $query="UPDATE main SET vehicle='$vehicle',company='$company'  where sno=$sno";
$query_run=mysqli_query($conn,$query);
  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Data Updated") </script>';
  }
  else{echo '<script type="text/javascript"> alert("Data Not Updated") </script>';

  }
}
 ?>
