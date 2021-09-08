
<!DOCTYPE html>
<html lang="en">
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
  padding: 8px 8px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
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
.sidepanel {
  height: 500px; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 0; /* Stay on top */
  down: 20;
  left: 0;
  background-color: w3-green; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */
  margin-bottom: 10%;
}

/* The sidepanel links */
.sidepanel a {
  padding: 4px 4px 4px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  transition: 0.3s;
  down: 10;
  margin-bottom: 4%;

}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: white;
}

/* Position and style the close button (top right corner) */
.sidepanel .closebtn {
  position: absolute;
  down: 10;
  right: 25px;
  font-size: 36px;
  margin-bottom: 50px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 18px;
  cursor: pointer;
  background-color: white;
  color: black;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: green;
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
    <a href="#showcase" onclick="window.location.href='dbc.php'"class="w3-bar-item   w3-hover-white">Add Accounts</a> 
    <a href="#services" onclick="window.location.href='editnew.php'"class="w3-bar-item w3-button w3-hover-white">Edit Accounts</a> 
    <a href="#designers" onclick="window.location.href='view.php'"class="w3-bar-item w3-button w3-hover-white">View</a> 
    <a href="#packages" onclick="window.location.href='cb.php'"class="w3-bar-item w3-button w3-hover-white">Company Balance</a> 
    <a href="#contact" onclick="window.location.href='addv.html'"class="w3-bar-item w3-button w3-hover-white">Add Vehicle name</a>
    <a href="#contact1" onclick="window.location.href='addc.html'"class="w3-bar-item w3-button w3-hover-white">Add Company name</a>
    <a href="#contact2" onclick="window.location.href='removevehicle.php'"class="w3-bar-item w3-button w3-hover-white">Remove Vehicle name</a>
    <a href="#contact2" onclick="window.location.href='deletecompany.php'"class="w3-bar-item w3-button w3-hover-white">Remove Company name</a>
    <a href="#contact2" onclick="window.location.href='user.php'"class="w3-bar-item w3-button w3-hover-white">Users</a>
  </div>
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
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



  <br>
  <br>

<div class="container">
<form action="updatebal.php" method="post">
  <h1 align="left">Company Balance</h1>
  

  <br>
  <br>
  <table class="table" style="width:950px;" align="left">
    <thead>
      <tr bgcolor="lightblue">
        <th>Company Name</th>
        <th>Balance</th>
      </tr>
	  </thead>
	  </tbody>
	  <?php
$conn=mysqli_connect("localhost","root","G@m3r0pinthechat","account");
	$sqli = "SELECT* FROM company";
    $resulti = mysqli_query($conn, $sqli);
	$var=0;

    while($rowi = mysqli_fetch_assoc($resulti)) {
		if($var==0)
		{			
	  echo "<tr >";
	  echo "<td>".$rowi['company']."</td><td>" . $rowi['balance']. "</td> ";
      echo "</tr>";
	  $var=1;
		}
		else
		{			
	  echo "<tr bgcolor=palegreen>";
	  echo "<td>".$rowi['company']."</td><td>" . $rowi['balance']. "</td>";
      echo "</tr>";
	  $var=0;
		}
	}
	?>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr>
	<td><b>Select company to update balance<b>
	<?php 
		echo "<select name='company'>";
		$conn=mysqli_connect("localhost","root","G@m3r0pinthechat","account");
	$sqli = "SELECT* FROM company";
    $resulti = mysqli_query($conn, $sqli);
	while($rowi = mysqli_fetch_assoc($resulti)) {
		echo "<option value=".$rowi['company'].">".$rowi['company']."<option>";
	}
	echo "</select>";
		?></td>
		<td><input type="text" name="balance"><input class="btn btn-danger" type="submit" value="Update"></td></tr>
	
	</tbody>
	</table>
	</form>
</div>

</body>
</html>

