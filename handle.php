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
    $name = htmlentities($_POST['username']);
    $roll = htmlentities($_POST['roll']);
$sql = "INSERT INTO entrance (name, roll, password) VALUES ('$name','$roll','$password')";
// echo $sql;
//exit;
if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] = "User ".$name." added Successfully!";
    header('location:ulogin.php');
    exit;
    session_destroy(); 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
}



// user login handle
if (isset($_POST['login']))
{
    $roll = $_POST['roll'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM entrance WHERE roll = '$roll' and password = '$password'";
    $data = mysqli_fetch_assoc($conn->query($sql));

    if($data['password'] == $password && $data['roll'] == $roll)
        header('location:home.php');
    else
    {
        $_SESSION['err'] = 'Invalid Username Or Password!';

        header('location:ulogin.php');
    }
        
}

else
{
    $_SESSION['warning']= "Invalid request";
    @header('location: register.php');
    exit;
}
?>