<html>
<body>
<?php
$username = "root";
$password = "G@m3r0pinthechat";
$database = "account";
$mysqli = new mysqli("localhost", $username, $password, $database);
$a=$_POST['company'];

$query = "SELECT * FROM main WHERE company='".$a."'";


echo '<table border="0" cellspacing="2" cellpadding="2" class="table table-striped">
      <thead>
<tr bgcolor="grey">
          <td> <font face="Arial">Sno</font> </td>
          <td> <font face="Arial">Date</font> </td>
          <td> <font face="Arial">Vehicle no</font> </td>
          <td> <font face="Arial">company</font> </td>
          <td> <font face="Arial">invoice</font> </td>
          <td> <font face="Arial">too</font> </td>
          <td> <font face="Arial">material</font> </td>
          <td> <font face="Arial">weight</font> </td>
          <td> <font face="Arial">freight</font> </td>
          <td> <font face="Arial">loading</font> </td>
          <td> <font face="Arial">weightment</font> </td>
          <td> <font face="Arial">unloading</font> </td>
          <td> <font face="Arial">store</font> </td>
          <td> <font face="Arial">other</font> </td>
          <td> <font face="Arial">total</font> </td>
          <td> <font face="Arial">advance</font> </td>
          <td> <font face="Arial">balance</font> </td>
          
</tr>
      </thead>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["sno"];
        $field2name = $row["date"];
        $field3name = $row["vehicle"];
        $field4name = $row["company"];
        $field5name = $row["invoice"];
        $field6name = $row["too"];
        $field7name = $row["material"];
        $field8name = $row["weight"];
        $field9name = $row["freight"];
        $field10name = $row["loading"];
        $field11name = $row["weightment"];
        $field12name = $row["unloading"];
        $field13name = $row["store"];
        $field14name = $row["other"];
        $field15name = $row["total"];
        $field16name = $row["advance"];
        $field18name = $row["commission"];

        
        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
                  <td>'.$field9name.'</td>
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td>
                  <td>'.$field12name.'</td>
                  <td>'.$field13name.'</td>
                  <td>'.$field14name.'</td>
                  <td>'.$field15name.'</td>
                  <td>'.$field16name.'</td>
                  
                  <td>'.$field18name.'</td>
                  
                  

              </tr>';
    }
    $result->free();
}
?>
<form action="index.php" class="inline">
    <button class="submit-button" >Back</button>
</form>
<form align="right" name="form1" method="post" action="logout.php">
 <label>
  <input name="submit2" type="submit" id="submit2" value="Logout">
  </label>
</body>
</html>
