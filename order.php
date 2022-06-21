 
 
 
 
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
        .a{
            text-decoration:none;
            padding:0;
        }
        .btn{
  padding:100px;
  border-radius: 10px;
}
.btn-primary{
  color:white;
  background:#f81200;
}
.btn-outline-primary{
  color:#f81200;
  border:1px solid #f81200;
}
.btn-primary:hover{
  color:#f81200;
  border:1px solid #f81200;
  background:transparent;
}
.btn-outline-primary:hover{
  color:white;
  background:#f81200;

}

        
    </style>
</head>
<body>
    
 <!-- GET and POST -->
 <div class="bimage">

    <form action="order_handel.php" method="POST" class="form-container">
<?php if(isset($_SESSION['content'])){ ?>
        <i><h4 style="color:lightgreen;"><?php echo $_SESSION['content'];  ?><h4></i>
        <?php
            }
        ?> 
    <h2 style="color:white"><b>Order</b></h2>
    <div class="form-group">
        <b style="color:white">Item Name:</b><br><input type="text" name="names" placeholder='eg:Veg-Khana'value="" required> 
    </div>
    <div class="form-group">
        <b style="color:white">Table No:</b><br><input type="text" name="table_no" placeholder='1 to 12'value="" required>
    </div>

    <div class="form-group">
       <p style="color:white; text-align:center"> Quantity:<P>
    <div class="text-center"> 
           <input type="number" min="1" max="10" steps="1" name="quantity" id="" required>
            </div><br>
    </div>
 
     <div>
     <div class="text-center">
          <input type="submit" value="Confirm" name="submit">
      </div>
      <br><br>
      <div class="text-center">
          <a   style="border:red; color:red;"href="home.php">Cancel</a>
      </div>
      <div style="clear:both;"></div>
      <br>
     </div>
    </div>
    </form>
</div>
</body>
</html>

<?php
}
else{
  header("location:index.php");
}
?>