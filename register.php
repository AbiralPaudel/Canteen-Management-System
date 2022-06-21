<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register Form</title>
    <style>
        .container
        {
            width:70%;
            margin:auto;
            border: 3px solid grey;
            padding: 20px;
            margin-top:50px;
        }
        .form-control
         {
        display: block;
        width: 100%;
        height: 1.7em;
        margin-top: 6px;
      }
        .text-center
         {
            text-align: center;
        }
        label {
        font-weight: bold;
      }
      .textarea {
        display: block;
      }
        .form-group
         {
        margin-bottom: 20px;
      }
        input[type="submit"] {
        padding: 8px;
        background: white;
        border: 1px solid grey;
        border-radius: 10px;
      }
      input[type="submit"]:hover {
        background:grey;
        color:beige;
      }
    </style>
  </head>
  <body>
        <div class="container">
                <form action="handle.php" method="POST">
                  <h2 class="text-center">Register to our site</h2>
                  
                  <div class="form-group">
                    <label for="fullname">Name:</label>
                    <input type="text" class="form-control" name="name" required />
                  </div>
                  <div class="form-group">
                      <label for="RollNumber">Roll Number [eg.074bct04] :</label>
                      <input type="text"class="form-control" name="roll" required />
                  </div>
                  
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input
                      type="password"
                      class="form-control"
                      name="cpassword"
                      required
                    />
                  </div>
                
                  <div class="form-group">
                    <input
                      type="submit"
                      value="Register"
                      class="form-control"
                      style="height:50px;"
                      
                      name="submit"
                      
                      
                    />
                    <b>Already a member? <a href="ulogin.php">Login</a></b>
                  </div>
                </form>
              </div>
            </body>
          </html>
          
          -->

          <?php
session_start();
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
    <form action="reg_handle.php" method="POST" class="form-container">
    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] != "")
    {
        ?> 
        <h3 style = "color:green"> <?php echo $_SESSION['success'];?> </h3>
        <?php
    }
    ?>
    <h2 style="color:white"><b>REGISTER</b></h2>
    <div class="form-group">
        <b style="color:white">Roll No:</b><br><input type="text" name="roll" placeholder='eg.074bct04'value="" required>
    </div>
    <div class="form-group">
        <b style="color:white">Name:</b><br><input type="text" name="username" value="" required>
    </div>
    <div class="form-group">
        <b style="color:white">Password:</b><br> <input type="password" name="password" required>
    </div>
    <div class="form-group">
        <b style="color:white">Confirm Password:</b><br> <input type="password" name="cpassword" required>
    </div>
    <div class="form-group">
      <div class="text-center">
          <input type="submit" value="Register" name="submit">
      </div>
    </div>
    <b style="color:white">Already a member? Login <a href="ulogin.php" style="color:white">here.</a></b>
    </form>
</div>
</body>
</html>
