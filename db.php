<?php

$date = filter_input(INPUT_POST, 'date');
$vehicle = filter_input(INPUT_POST, 'vehicle');
$company = filter_input(INPUT_POST, 'company');
$vehicle = filter_input(INPUT_POST, 'vehicle');
$invoiceno = filter_input(INPUT_POST, 'invoice');
$too= filter_input(INPUT_POST, 'too');
$material = filter_input(INPUT_POST, 'material');
$weight= filter_input(INPUT_POST, 'weight');
$freight = filter_input(INPUT_POST, 'freight');
$loading = filter_input(INPUT_POST, 'loading');
$weightment = filter_input(INPUT_POST, 'weightment');
$unloading = filter_input(INPUT_POST, 'unloading');
$store = filter_input(INPUT_POST, 'store');
$other = filter_input(INPUT_POST, 'other');
$advance = filter_input(INPUT_POST, 'advance');
$total=$freight+$loading+$weightment+$unloading+$store+$other;
$advantage = filter_input(INPUT_POST, 'advantage');
$remark = filter_input(INPUT_POST, 'remark');
$advantage = filter_input(INPUT_POST, 'advantage');
$commission = filter_input(INPUT_POST, 'commission');
$cashmode = filter_input(INPUT_POST, 'cashmode');
$status ="complete";
if ( !empty($vehicle) ){
$host = "localhost";
$dbusername = "root";
$dbpassword = "G@m3r0pinthechat";
$dbname = "account";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error');
 
echo "Hello by PHP echo";  
 
}
else{
  if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_SESSION['form_submit']) )

    extract($_POST);
    $sql="INSERT INTO main (date,vehicle,company,invoice,too,material,weight,freight,loading,weightment,unloading,store,other,advance,remark,advantage,commission,cashmode,status,total) VALUES('$date','$vehicle','$company','$invoiceno','$too','$material','$weight','$freight','$loading','$weightment','$unloading','$store','$other','$advance','$remark','$advantage','$commission','$cashmode','$status','$total')";
    $_SESSION['form_submit']='true';

    header("location: tan.html");

}



if ($conn->query($sql)){
echo "SUccess";
header("location: tan.html");

}
else{
echo "Error: ". $sql ."
". $conn->error;
echo "Incomplete details"; 
}
$conn->close();
}


?>
