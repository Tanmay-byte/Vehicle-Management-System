<?php 

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","G@m3r0pinthechat");
define("DATABASE","account");


$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to connect to Database");

if($dbhandle->connect_error){

	die("Connection Failed:" .$dbhandle->connect_error);

}


?>