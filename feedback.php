
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
  <title>Feedback</title>
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
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
    <a class="nav-link" href="about.php"><h5>ABOUT</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="feedback.php" style="color:yellow;"><h5>FEEDBACK</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php"><h5>LOG OUT</h5></a>
  </li>
</ul>
</div>

<!-- Header ends here -->

<div class="container"><br><br><br>
            <h3 style="padding-left=80px;">Get in touch with us !</h3>
            <hr>
            <div class="main-section">
            <form>
              
                     <div class="form-group">
                    <label for="name">Your Name :</label>
                    <input type="text" name="" id="" class="form-control">
                     </div>
                <div class="form-group">
                        <label for="email">Your E-mail :</label>
                        <input type="email" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                        <label for="phone">Your Ph. No. :</label>
                        <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                        <p>Your Feedback:</p>
                        <!-- <label for="feedback">Your Feedback:</label> -->
                        <textarea name="" id="" cols="106" rows="10" style="margin-left: 0;"></textarea>
                </div>
                <div>
                <button type="button" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>
              </div>
            </div>
</body>
</html>
<?php include 'footer.php'; ?>
<?php include 'bootstrap.php'; ?>


<?php
}
else{
  header("location:index.php");
}
?>