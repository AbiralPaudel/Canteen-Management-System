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

    
    $id = $_POST['id'];
    
    $sql = "DELETE FROM items WHERE id=".$id;
      $result = mysqli_query($conn,$sql);
    
      
        
         header("location:admin_panel.php ");
      
    
   

