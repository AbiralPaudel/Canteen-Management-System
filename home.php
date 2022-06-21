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
    <a class="nav-link active" href="home.php" style="color:yellow;"><h5>HOME</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="veg.php" ><h5>VEG ITEMS<br> </h5></a>
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


<div class="bd-example" >
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/canteen3.jpg" style="width: 2000px; height:500px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to HCOE Canteen</h2>
          <p>We serve the quality food at its best!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slide1.jpg" style="width: 2000px; height:500px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Our priority - your good health!</h2>
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slide3.jpg" style="width: 2000px; height:500px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>We'll never let you go away from us!</h2>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  <section class="container">
    <h3  class="text-center trainer-header">Today's Specials</h3>
    <hr style="width:40%">
    <div class="cards">
      <div class="card">
        <div class="card-image">
          <img src="images/fishcurry.jpg" alt="fishcurry" width="100%">
        </div>
        <p class="card-title">Fish Curry</p>
        <!-- <p class="card-text">Fish head curry is a dish in Singaporean cuisine with mixed Indian and Chinese origins. The head of a red snapper is semi-stewed in a Kerala-style curry with assorted vegetables such as okra and eggplants. It is usually served with either rice or bread, or as a shared dish. <br><br></p> -->
        <p class="text-center">Price: Rs. 150</p>
        <form class="text-center" method="POST" action="order.php">
          <input type="submit" value="Order" name="order">
          <!-- <a href="order.php" class="btn btn-outline-primary">Order</a> -->
        </form>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="images/kattiroll.jpg" alt="kattiroll" width="100%">
        </div>
        <p class="card-title">Chicken Katti Roll</p>
        <!-- <p class="card-text">A katti roll is a street-food dish originating from Kolkata, West Bengal. In its original form, it is a skewer-roasted kebab wrapped in a paratha bread, although over the years many variants have evolved all of which now go under the generic name of kati roll. <br><br>Price: Rs. 180</p> -->
        <p class="text-center">Price: Rs. 100</p>
        <div class="text-center">
          <a href="order.php" class="btn btn-outline-primary">Order</a>
        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="images/laphing.jpg" alt="laphing" width="100%">
        </div>
        <p class="card-title">Chicken Laphing</p>
        <!-- <p class="card-text">Laphing is a spicy cold mung bean noodle dish in Tibetan cuisine. It is a street food. It can be eaten with red pepper chili, coriander and green onion sauce. The noodles have a slippery texture and are served with a soy sauce gravy. It is traditionally a summer food.<br><br>Price: Rs. 100</p> -->
        <p class="text-center">Price: Rs. 80</p>
        <div class="text-center">
          <a href="order.php" class="btn btn-outline-primary" >Order</a>
        </div>
      </div>
    </div>
  </section>
</html>
  <?php include 'footer.php' ; ?>
  <?php include 'bootstrap.php' ?>
<?php
}
else 
{
  header("location:index.php");
}
?>