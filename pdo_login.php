<?php
 session_start();
 $host = "localhost";
 $username = "root";
 $password = "G@m3r0pinthechat";
 $database = "account";
 $message = "";
 try
 {
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))
      {
           if(empty($_POST["username"]) || empty($_POST["password"]))
           {
                $message = '<label>All fields are required</label>';
           }
           else
           {
                $query = "SELECT * FROM new_table WHERE username = :username AND password = :password";
                
                $statement = $connect->prepare($query);
                $statement->execute(
                     array(
                          'username'     =>     $_POST["username"],
                          'password'     =>     $_POST["password"]
                     )
                );
                $row=$statement->fetchAll();
                
                $count = $statement->rowCount();
                if($count > 0)
                {
                 
                     $_SESSION["username"] = $_POST["username"];
                     header("location:indexuser.php");

                }
                else
                {
                     $message = '<label>Wrong Data</label>';
                }


           }
      }
 }
 catch(PDOException $error)
 {
      $message = $error->getMessage();
 }
 ?>
 <!DOCTYPE html>
 <html>
      <head>
      <title>MAHAVINAYAK ROADLINES</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <style>body {
            background-position: center;
            background-size: 1790px;
            
            
           
          }
          
          h3{
               color:black;
          }
          </style>
          </head>
      <body background="mak-fVDOn6sXWps-unsplash.jpg">
      <form align="right" name="form1" method="post" action="test.html">
    <label>
    <input name="submit2" type="submit" id="submit2" value="Back"><br><br><br><br><br>
    </label>
  </form>
           <br />
           <div class="container" style="width:500px;">
                <?php
                if(isset($message))
                {
                     echo '<label class="text-danger">'.$message.'</label>';
                }
                ?>
                <h3 align="" style="color:Brown" ><b>User Login</b></h3><br />
                <form method="post">
                     <label ><h4 style="color:white">Username</h4></label>
                     <input type="text" name="username" placeholder="Eg:Tanmay" class="form-control" required />
                     <br />
                     <label><h4 style="color:white">Password</h4> </label>
                     <input type="password" name="password" placeholder="Eg:Tanmay1234" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                     <br />
                     
                     <input type="submit" name="login" class="btn btn-info" value="Login" />
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="reset" value="Reset">Clear</button>
                </form>
           </div>
           <br />
      </body>
 </html>
