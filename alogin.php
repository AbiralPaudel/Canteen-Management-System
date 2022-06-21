<?php
session_start();
if(isset($_SESSION['username_admin'])){
    header('location:admin_panel.php');
  
  }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
        body{
        }
        .bimage{
            border:1px solid black;
            padding:5px;
            text-align:center;
            width:90%;
            margin:auto;
            height:120vh;
            margin-top:5vh;
            background-image: url(images/canteen3.jpg);
            padding-bottom:80px;
        
            
            
        }
        .form-group{
            margin-bottom:10px;
        }
        .text-center{
            text-align:center;
        }
        .form-container{
            background: maroon;
            border: 2px solid white;
            border-radius: 15px;
            text-align: center;
            margin-top:50px;
            margin-left:450px;
            margin-right:50px; 
            width:50vh;
            
        

            

        }
        
    </style>
</head>
<body>
    
    <!-- GET and POST -->
<div class="bimage">
    <form action="admin_handle.php" method="POST" class="form-container">
    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] != "")
    {
        ?> 
        <h3 style = "color:green"> <?php echo $_SESSION['success'];?> </h3>
        <?php
    }
    ?>
    <h2 style="color:white"><b>Welcome, admin! LogIn here.</b></h2>
    <div class="form-group">
        <b style="color:white">Username:</b><br><input type="text" name="roll" value="">
    </div>
    <div class="form-group">
        <b style="color:white">Password:</b><br> <input type="password" name="password">
    </div>

    <div class="text-center">
        <input type="submit" value="Log-in" name="submit">
    </div>
    <br>
    </form>
</div>
</body>
</html>
