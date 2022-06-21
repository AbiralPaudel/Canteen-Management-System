<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['login']) && !empty($_POST['login']))
{
    
    $password = md5($_POST['password']);
    $roll = htmlentities($_POST['roll']);
    $sql = "SELECT * FROM user_login WHERE roll = '$roll' and pass = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $_SESSION['username']=$row['name'];
         header("location:home.php ");
      } 
      else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
         
      }
   }
?>
