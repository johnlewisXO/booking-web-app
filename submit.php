<?php
require_once 'insert.php';

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
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
                        <h2>Create Record</h2>
                    </div>
                    <p>Enter Booking Details Here.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group ">
                            <label>Clientname:</label>
                           <?php echo $name; ?>
                        </div>
                        <div class="form-group">
                            <label>Booking ID:</label>
                            <?php echo $bookingID; ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="amountDue">Amount Due</label>
                            <?php echo $amountDue; ?>
                        </div>

                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>

                    <?php
                        
                        // Attempt insert query execution
                        $sql = "INSERT INTO persons (first_name, last_name, email) 
                                VALUES ('$first_name', '$last_name', '$email')";

                        if(mysqli_query($conn, $sql)){
                            echo "Records added successfully.";
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                        }
                            mysqli_close($conn);
                        ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>