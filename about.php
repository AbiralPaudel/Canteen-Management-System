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
  <title>About Us</title>
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
    <a class="nav-link" href="drinks.php" ><h5>DRINKS</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="about.php" style="color:yellow;"><h5>ABOUT</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="feedback.php"><h5>FEEDBACK</h5></a>
  </li>
</ul>
</div>

<!-- Header ends here -->

<br> <br> <br>

          <div class="container">
          <h2>About Us</h2>
          <hr>
          <div class="main-section">
          <p class="left">
            We are the team of HCOE Canteen. The team consists of 15 members. 5 of us are cooks, 3 cleaners and 7 other staffs.
            <br>The list of staffs are : <br>
            <ul>
              <li>Cooks:</li>
              <ol>
                <li>Hari Kandel</li>
                <li>Pushpa Karki</li>
                <li>Chiring Lama</li>
                <li>Gopal Shrestha</li>
                <li>Priya Rai</li>
              </ol>
              <li>Cleaners:</li>
              <ol>
                <li>Bijay Khadka</li>
                <li>Kamala Sharma</li>
                <li>Som Bdr. Nepali</li>
              </ol>
              <li>Other Staffs</li>
              <ol>
                <li>Sushant Bhattarai</li>
                <li>Aashis Aryal</li>
                <li>Asmina Uprety</li>
                <li>Sonika Sharma</li>
                <li>Ashok Pokharel</li>
                <li>Gaurav Acharya</li>
                <li>Pratima Koirala</li>
              </ol>
            </ul>
            <p>We thank you for visiting to us and wish to have your feedback in the feeback section.</p>
            <br><h1>Thank You !</h1>
          </p>
          <div style="clear: both">

          </div>
            </div>
            <h5 style="text-align:center; margin-top:5px;">Support Us by Donating</h5>
            <hr>
            <!-- <div class="money"> -->
            <!-- <ul>
            <li><img width="8%" src="images/paypal.png" alt=""></li>
            <li><img width="8%" src="images/esewa.png" alt=""> </li>
            <li><img width="8%" src="images/khalti.png" alt=""> </li>
            <li><img width="8%" src="images/visa.png" alt=""></li>
            </ul> -->
            <div >
            <ul class="social">
                      <li>  <a href="https://www.paypal.com/np/home"><img src="images/paypal.png" width="8%" ></a></li>
                     <li>  <a href="https://esewa.com.np/#/home"><img src="images/esewa.png" width="8%" ></a></li>
                     <li>  <a href="https://khalti.com"><img src="images/khalti.png" width="8%" ></a></li>
                     <li>  <a href="https://usa.visa.com"><img src="images/visa.png" width="8%" ></a></li>
       
             </ul>
  
           
        </div>
</div>

<?php include 'footer.php'; ?>
<?php include 'bootstrap.php'; ?>
</html>

<?php
}
else{
  header("location:index.php");
}
?>