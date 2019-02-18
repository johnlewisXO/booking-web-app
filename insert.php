

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="bootstrap.css">

    <!-- google fonts css link -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- custom style sheets -->
    <link rel="stylesheet" href="styles.css">

    <!-- internal style sheets -->
    <script src="insert.js"></script>

    <style type="text/css">
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Booking</h2>
                    </div>
                    <p>Enter Booking Details Here.</p>
                    <form method="post" id="myform" action="insert.php">
                        <div class="form-group ">
                            <label>Clientname:</label>
                            <input type="text" name="clientname" class="form-control" value="">
                        </div>
                        <div class="form-group ">
                            <label>Booking Description:</label>
                            <input type="text" name="bookingID" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label name="amountDue" for="amountDue">Amount Due</label>
                        </div>

                        <p id="result"></p>

        
                        <input type="submit" id="add" class="btn btn-primary" value="Book now!">
                        <a href="index.php" class="btn btn-secondary">Go back</a>
                    </form>

                    <?php

                    require_once 'config.php';

                    $clientname = $_POST['clientname'];
                    $bookingID = $_POST['bookingID'];

                    $sql = "INSERT INTO 'testbookings' ('clientname ', 'bookingID') 
                            VALUES ('$clientname', '$bookingID')";

                    if(mysqli_query($conn, $sql)){
                        echo 'User: ' .  $clientname . "!" ."<br>" . "Your booking goes as follows: " . $bookingID . "<br>";
                    }
                        else {
                            echo 'booking error';
                        }
                    ?>


                </div>
            </div>        
        </div>
    </div>
</body>
</html>