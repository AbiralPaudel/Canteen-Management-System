

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
    <a class="nav-link" href="veg.php" ><h5>VEG ITEMS<br> </h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="nonveg.php"><h5>NON-VEG ITEMS</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="drinks.php" style="color:yellow;"><h5>DRINKS</h5></a>
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
    <h3 class="text-center color">Drinks</h3>
    <hr>
    <ul class="teamnav">
      <li class="pic" >
        <img src="images/sprited.jpg" width="100%" >
        <h5 class="text-center">Sprite</h5>
        <p class="text-center">Price: Rs.40</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center">   
        <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
            <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>
      </li>
      <li class="pic">
        <img src="images/coked.jpg" width="100%" height="90%">
        <h5 class="text-center">Coke</h5>
        <p class="text-center">Price: Rs.40</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
       <div class="text-center"> <a href="order.php" class="btn btn-outline-primary">Order</a></div>
        </div>
      </li>
      <li class="pic">
        <img src="images/fantad.jpg"width="100%"  >
        <h5 class="text-center">Fanta</h5>
        <p class="text-center">Price: Rs.40</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
            <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>
      </li>
      <li class="pic" >
        <img src="images/redbulld.jpg" width="100%">
        <h5 class="text-center">Red Bull</h5>
        <p class="text-center">Price: Rs.100</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
        
        <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>
      </li>
      <li class="pic">
        <img src="images/frooti.jpg" width="100%">
        <h5 class="text-center">Frooti</h5>
        <p class="text-center">Price: Rs.40</p>
        <!-- <p class="card-text">Quantity</p>
        <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="" id="">
            </div><br> -->
            <div class="text-center"><a href="order.php" class="btn btn-outline-primary">Order</a></div>

      </li>
      <li class="pic">
        <img src="images/sliced.jpg" width="100%">
        <h5 class="text-center">Slice</h5>
        <p class="text-center">Price: Rs.40</p>
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