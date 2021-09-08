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
    <h3 class="w3-xxlarge w3-text-green"><b>India's No.1 Truck Services</b></h3>
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

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-green"><b>Services</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>We are India's No1 transport services that focus on the fast and safe delivery of goods. </p>
    <p>Covering all modes of transport, we provide you with the services you need to meet your customers' demands. Based on your business need, our team can suggest the most effective and efficient services available. At the heart of our service is our commitment to customers' service and quality. With 60 years of experience in delivering excellence, our focus has always been solely on not letting our customers down.
	Think together. Move together. Success together.
    </p>
  </div>

  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Designers</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The best team in the world.</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Tanmay Nayak </h3>
          <p class="w3-opacity">CEO & Founder</p>

        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Mihir Shetty</h3>
          <p class="w3-opacity">Designer</p>

        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Lloyd Kasal</h3>
          <p class="w3-opacity">Architect</p>

        </div>
      </div>
    </div>
  </div>

  <!-- Features -->
<div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue"><b>Common Features</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>

<ul style="list-style-type:disc">
<li>MOST  Competitive and Reasonable rates.</li><br>

<li>Nature of material decides pattern of transport.</li><br>

<li>Prompt and Efficient service provider.</li><br>

<li>Round the clock service for enquiries & complaints.</li><br>

<li>Door to Door service.</li><br>

<li>Availability of Tempo/Truck/Mini-Truck/Trailer/Container/ODC Truck etc..</li><br>

<li>Total Logistic Services.</li><br>

<li>Warehousing Facility in Goa & Mumbai.</li><br>

<li>Own RCC Constructed Godowns.</li><br>

<li>Next Day delivery facility.   </li><br>

<li>All over India service.</li><br></ul> </p>
    
    
  </div>

  </div>
</form>
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
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
