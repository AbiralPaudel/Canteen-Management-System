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
    $table_no = ($_POST['table_no']);
    $name= htmlentities($_POST['names']);
    $quantity = htmlentities($_POST['quantity']);
    $user=$_SESSION['username'];
// $sql = "INSERT INTO items (names, table_no, quantity)
// VALUES (".'"'."$name".'"'.",".'"'."$table".'"'.",".'"'."$quantity".'"'.")";
$sql="INSERT INTO `items`( `names`, `quantity`, `table_no`,`user`) VALUES (".'"'."$name".'"'.",".'"'."$quantity".'"'.",".'"'."$table_no".'"'.",".'"'."$user".'"'.")";
mysqli_query($conn,$sql);

    $_SESSION['content'] = "Your ".$name." was ordered successfully.";
    header("location: order.php");
    exit;
    $conn->close();
} 



else
{
    $_SESSION['warning']= "Invalid request";
    @header("location:home.php");
    exit;
}
?>