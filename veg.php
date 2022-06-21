<?php
session_start();
if(isset($_SESSION['username'])){
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HCOE Canteen</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
 </head>
<!-- Header starts here -->
<div class="navigation-container"style="background-color:maroon;">
  <a href="home.php"><h4 class="head white">HCOE CANTEEN</h4> </a>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home.php"><h5>HOME</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="veg.php" style="color:yellow;" ><h5>VEG ITEMS<br> </h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="nonveg.php"><h5>NON-VEG ITEMS</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="drinks.php" ><h5>DRINKS</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php"><h5>ABOUT</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="feedback.php"><h5>FEEDBACK</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php"><h5>LOG OUT</h5></a>
  </li>
</ul>
</div>

<!-- Header ends here -->

<section class="main-section">
    <h3 class="text-center color">Veg Items</h3>
    <hr>
    <ul class="teamnav">
      <li class="pic" >
        <img src="images/vegmomo.jpg" width="100%" >
        <br>
        <br>
        <h5 class="text-center">Veg Momo</h5>
        <p class="text-center">Price: Rs.60</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center">   
        <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
            <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>
      </li>
      <li class="pic">
        <img src="images/veg-khana.jpg" width="100%" >
        <br>
        <br>
        <h5 class="text-center">Veg Khana</h5>
        <p class="text-center">Price: Rs.80</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
        </div><br> -->
       <div class="text-center"> <a href="order.php" class="btn btn-outline-primary">Order</a></div>
        </div>
      </li>
      <li class="pic">
        <img src="images/samosa (1).jpg"width="100%"  >
        <br>
        <br>

        <h5 class="text-center">Samosa</h5>
        <p class="text-center">Price: Rs.20</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
            <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>
      </li>
      <li class="pic" >
        <img src="images/chowmein.jpg" width="100%">
        <br>
        <br>

        <h5 class="text-center">Veg Chowmein</h5>
        <p class="text-center">Price: Rs.50</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
        
        <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>
      </li>
      <li class="pic">
        <img src="images/roti.jpg" width="100%">
        <br>
        <br>

        <h5 class="text-center">Roti</h5>
        <p class="text-center">Price: Rs.20</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
            <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>

      </li>
      <li class="pic">
        <img src="images/laphing.jpg" width="100%">
        <br>
        <br>

        <h5 class="text-center">Laphing</h5>
        <p class="text-center">Price: Rs.60</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
            <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>

      </li>

    <div style="clear:both;"></div>
  </section>
</html>
  <?php include 'footer.php' ; ?>
  <?php include 'bootstrap.php' ?>


  <?php
}
else{
  header("location:index.php");
}
?>
  