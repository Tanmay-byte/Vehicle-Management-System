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
           if(empty($_POST["admin"]) || empty($_POST["password"]))
           {
                $message = '<label>All fields are required</label>';
           }
           else
           {
                $query = "SELECT * FROM admin WHERE admin = :admin AND password = :password";
                $statement = $connect->prepare($query);
                $statement->execute(
                     array(
                          'admin'     =>     $_POST["admin"],
                          'password'     =>     $_POST["password"]
                     )
                );
                $row=$statement->fetchAll();

                $count = $statement->rowCount();
                if($count > 0)
                {

                     $_SESSION["admin"] = $_POST["admin"];
                     header("location:index.php");





                }
                else
                {
                     $message = '<label>NOT ADMIN</label>';
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
            background-size: 2000px;
            background-repeat: no-repeat;
            
           
          }
          
          }
          h3{
               color:white;
          }
          </style>
      </head>
      <body background="jiesuang-ng-a6YQ1fT9W9k-unsplash.jpg">
      <form align="right" name="form1" method="post" action="test.html">
    <label>
    <input name="submit2" type="submit" id="submit2" value="Back">
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
                <br><br><br><br><br><br><br><br>
                <h3 align="" style="color:white"><b>Admin Login</b></h3><br />
                <form method="post">
                     <label> <h4 style="color:yellow">Admin Username</h3></label>
                     <input type="text" name="admin" class="form-control"  />
                     <br />
                     <label><h4 style="color:yellow">Password</h5></label>
                     <input type="password" name="password" class="form-control" />
                     <br />
                     <input type="submit" name="login" class="btn btn-info" value="Login" />
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="reset" value="Reset">Clear</button>
                </form>
           </div>
           <br />
      </body>
 </html>
