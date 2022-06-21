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
if (isset($_POST['submit']) && !empty($_POST['submit']))
{
    //if($_POST['p'])
    if ($_POST['password'] != $_POST['cpassword'])
         {
             $_SESSION['err'] = 'Password not matched!';
             header('location:register.php');
             die();
         }
    $password = md5($_POST['password']);
    $name= htmlentities($_POST['username']);
    $roll = htmlentities($_POST['roll']);

$sql = "INSERT INTO user_login (name, roll, pass)
VALUES (".'"'."$name".'"'.",".'"'."$roll".'"'.",".'"'."$password".'"'.")";
//echo $sql;
//exit;
if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] = "User ".$name." added Successfully";
    header('location:ulogin.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else
{
    $_SESSION['warning']= "Invalid request";
    @header('location: register.php');
    exit;
}
?>