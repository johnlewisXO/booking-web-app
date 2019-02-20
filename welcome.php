<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$name = "";
$surname = "";
$hotelselect = "";
$date1 = "";
$date2 = "";

$hotelselect = array(
    $hotel1 = 2984,
    $hotel2 = 1117,
    $hotel3 = 1638,
);


$date1 = strtotime("indate");  
$date2 = strtotime("outdate");


$diff = abs($date2 - $date1);  

$years = floor($diff / (365*60*60*24));

$months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24));

$days = floor(($diff - $years * 365*60*60*24 -  
             $months*30*60*60*24)/ (60*60*24));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="bootstrap.css">

    <!-- google fonts css link -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

    <!-- custom style sheets -->
    <link rel="stylesheet" href="css\styles.css">

    <!-- internal style sheets -->
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-main">
        <div class="page-header">
            <p class="text-secondary logon-status">
                <?php echo "Logged in as: " . htmlspecialchars($_SESSION["username"]); ?>
            </p>
            <p>
                <a href="reset-password.php" class="btn btn-default">Reset Your Password</a>
                <a href="logout.php" class="btn btn-default">Sign Out of Your Account</a>
            </p>
        </div>

        <div class="container-bookings">

            <form action="welcome.php" method="POST">
                <div class="row date-time">
                    <div class="col-md-12">

                        <label for="">Enter clientname :</label>
                        <br>
                        <input type="text" name="clientname" id="clientname">

                        <br><br>

                        <label for="">Select Hotel :</label>
                        <br>
                        <div class="select is-rounded">
                            <div class="aside">
                                <select name="Hotels" required>
                                    <option value="" disabled selected>--please select your hotel--</option>
                                    <option value="Raddisson" name="hotel1">Raddisson</option>
                                    <option value="Protea" name="hotel2">Protea </option>
                                    <option value="Flora Bay" name="hotel3">Flora Bay</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <label for="">Booking Type + Specific requests :</label>
                        <br>
                        <input type="text" name="bookingType" id="bookingType">


                        <div class="form-group dates">
                            <label for="dates">Select dates :</label>
                            <br>
                            <input class="input is-rounded is-hovered" name="indate" type="date" placeholder="Please enter your check-in date"
                                required>

                            <br>
                            <input class="input is-rounded is-hovered" name="outdate" type="date" placeholder="Please enter your check-out date"
                                required>
                        </div>
                        <br>

                        <label for="amountDue">Amount Due</label>
                        <br>
                        <input type="text" name="amountDue">
                        <br>
                        <br>
                        <input type="submit" name="submit_btn" value="Book Now" action="">
                    </div>


                    <div class="col-md-5">


                    </div>

            </form>

        </div>
    </div>

    </div>

    <div class="column is-5 is-offset-2">
        <div class="box" id="hidden">
            <?php  

            require 'config.php';
            

            if(isset($_POST['submit_btn']))  { ?>
            <p class="display">Your patronage is appreciated <strong>
                    <?php echo $_POST['clientname']; ?></strong></p>

            <p class="display"> Your booking : <strong>

                    <?php
                $date1 = strtotime($_POST['indate']);  
                $date2 = strtotime($_POST['outdate']);   
                $diff = abs($date2 - $date1);  

                $years = floor($diff / (365*60*60*24));

                $months = floor(($diff - $years * 365*60*60*24)
                                            / (30*60*60*24));

                $days = floor(($diff - $years * 365*60*60*24 - 
                            $months*30*60*60*24)/ (60*60*24)); 
                ?>
                <p class="display">
                    <?php
                        echo $days. "</strong> nights at "; 
                        }  
                        if(isset($_POST['submit_btn'])){
                            $selected_val = $_POST['Hotels']; 
                            echo "<strong>" .$selected_val. "</strong>";
                        }
                    ?>
                </p>

                    <?php 
            if (isset($_POST['submit_btn'])) {
                $username = $_POST['clientname'];
                $bookingType = $_POST['bookingType'];
                $password = $_POST['amountDue'];

                if($mysqli === true){

                    $query = "INSERT INTO `testbookings` (`clientname`, `bookingType`, `amountDue`) VALUES (?, ?, ?);";
                }
                            
            }
                            
        ?>

        </div>
    </div>
</body>

</html>