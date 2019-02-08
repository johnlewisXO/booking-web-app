<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <!-- google fonts css link -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> 

    <!-- custom style sheets -->
    <link rel="stylesheet" href="styles.css">

    <!-- internal style sheets -->
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="container-main">
    <div class="page-header">
       
       </div>
   
       <p class="text-primary logon-status"><?php echo "Logged in as: " . htmlspecialchars($_SESSION["username"]); ?></p>
       <p>
           <a href="reset-password.php" class="btn btn-default">Reset Your Password</a>
           <a href="logout.php" class="btn btn-default">Sign Out of Your Account</a>
       </p>
   
       <div class="primary-text">
          <img class="img-aizen" src="img\royalhotel.png" alt="">
       </div>
   
       <div class="container-bookings">
   
   
   
           <form action="bookings.php" method="post">
               <div class="row date-time">
                   <div class="col-md-12">
                       <input type="date" name="indate" id="date-time" min="09-02-2019" max="09-02-2020">
                        <br><br>
                       <input type="date" name="outdate" id="date-time" min="09-02-2019" max="09-02-2020">
                       <br><br>
                       <label for="">Select the resources you wish to have access to:</label>
                       <br><br>
                       <input type="radio" name="Wi-Fi" id="wifi" value="Wi-Fi">
                       <input type="radio" name="Gym" id="gym" value="Gym facilities">
                       <input type="radio" name="Conference" id="conference" value="Conference facilities">
                       <br>
                       <input type="submit" value="Book Now" action="">
                    </div>

   
                   <div class="col-md-5">
                       
                       
                   </div>
                       
               </form>
                   
           </div>
       </div>

    </div>
</body>
</html>