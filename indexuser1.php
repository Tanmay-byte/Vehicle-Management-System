<!DOCTYPE html>
<html lang="en">
<title>MAHAVINAYAK ROADLINES</title>
  <!-- Add Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
    <div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"  >&nbsp;</a>
    <a href="#showcase" onclick="window.location.href='indexuser.php'" class="w3-hover-white">Home</a>
    <a href="#contact" onclick="window.location.href='indexuser1.php'" class="w3-hover-white">Contact us</a>


</div>
<br>
<button class="openbtn" onclick="openNav()">&#9776; Menu</button>


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

    <h1 class="w3-xxxlarge"><b>Welcome to Mahavinayak Roadlines</b></h1><br>
    <h3 class="w3-xxlarge w3-text-green"><b>India's No.1 truck services</b></h3>
    <hr style="width:50px;border:5px solid green" class="w3-round">
  </div>

  <div class="w3-row-padding">
    <div class="w3-half">
      Warehousing Facility in Goa & Mumbai<br><br>
	  Total Logistic Services<br><br>
      Door to Door service
    </div>

    <div class="w3-half">
      Mumbai Goa Daily Service<br><br>
      MOST Reasonable rates <br><br>
      Fast delivery
    </div>

  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>


  <!-- Packages / Pricing Tables -->




 <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-orange"><b>OUR ADDRESS </b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p>
 17,  "SAI ASHISH" VILLAGE ROAD, BHANDUP (W), MUMBAI - 400078<br>
 TEL : 022-25661471/25662746<br>
  CELL : 9892138640/9322719942<br>
    </p><br>
    <p>
	EMAIL : maha_vinayak@yahoo.com / mahavinayaktrans@yahoo.co.in
    </p>
  </div>

<!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

    <div class="container" style="width:500px;">
<form method="post" action="connectmsg.php">
&nbspName : <input class="w3-input w3-border" type="text" name="name" required><br><br>
Email : <input class="w3-input w3-border"type="email" name="email" required pattern='/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/'><br><br>
Message : <input class="w3-input w3-border"type="text" name="message" required><br>
<br><br>
<input type="submit" value="Submit"> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="reset" value="Reset" >Clear</button><br><br>
Would you recommend our company? <button onclick="myFunction()">Yes</button>
 <button onclick="myFunction1()">No</button>
<br><br>


  </div>
</form>
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
function myFunction() {
  location.replace("insertdata.php")
}

function myFunction1() {
  location.replace("insertdata1.php")
}


// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>



</body>
</html>
