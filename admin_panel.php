<?php
session_start();
if(isset($_SESSION['username_admin'])){
  ?>
<?php
$db_host="localhost";
$db_name="cms";
$db_user="root";
$db_pass="";
$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error())
{
    echo mysqli_connect_error();
    exit;
}
$sql="SELECT * 
        FROM items
      order by id";
 
$results=mysqli_query($conn,$sql);
if($results===FALSE)
{
    echo mysqli_error($conn);
}
else{
    $articles=mysqli_fetch_all($results,MYSQLI_ASSOC);

}

?>
<style>


.main-section1{
  margin-top:80px;
  width:100%;
  margin:auto;
  padding:10px;
  background-color:beige;
  border: 1px white solid;
  border-radius: 20px;
}


</style>

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
 <body>
<!-- Header starts here -->
<div class="navigation-container"style="background-color:maroon;">
  <a href="home.php"><h4 class="head white">HCOE CANTEEN</h4> </a>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href=""><h5>HOME</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="" ><h5>VEG ITEMS<br> </h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=""><h5>NON-VEG ITEMS</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="" ><h5>DRINKS</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=""><h5>ABOUT</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=""><h5>FEEDBACK</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=""><h5>LOG OUT</h5></a>
  </li>
</ul>
</div>
<!-- Header ends here -->
<section class="main-section">
    <h3 class="text-center color">Today's Order</h3>
    <hr>
    <ul class="teamnav">
    <?php foreach ($articles as $article) {?>

      <li class="pic">
      <form action="delete_item.php" method="post">
      <p class="left">order no: <input type="number" name="id"  min=1 max=20 step=1 id="" value=<?php echo $article['id'];?> readonly width="10%">  </h5></p>
      <p class="left">By: <h5><?php echo $article['user'] ;?></h5></p>

      <p class="left">Item: <h5><?php echo $article['names'] ;?></h5></p>
        <p class="left">Quantity:<h5><?php echo $article['quantity']; ?></h5></p>
        <p class="left">table no:<h5><?php echo $article['table_no']; ?></h5></p>
          

        <div class="text-center"> 
            <input type="submit" value="Delete/Delivered" name="Delete" class="btn btn-outline-primary">
      </div>
    </form>

      </li>
      <?php     
    }
    ?>
      
    <div style="clear:both;"></div>
  </section>

    </body>

  <?php include 'footer.php' ; ?>
  <?php include 'bootstrap.php'; ?>
   </html> 
   <?php
}
else{
  header("location:index.php");
}
?>
    
  