<?php
// Initialize the session
session_start();

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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- custom style sheets -->
    <link rel="stylesheet" href="styles.css">

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
            <p class="text-primary logon-status">
                <?php echo "Logged in as: " . htmlspecialchars($_SESSION["username"]); ?>
            </p>

            <p>
                <a href="index.php" class="btn btn-default">Sign Out of Your Account</a>
            </p>
        </div>

        <div class="img">
            <img class="img-aizen" src="img\royalhotel.png" alt="">
        </div>

        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>Welcome to your hotella.</h2>
                        </div><br>
                        <p>Proceed to make booking</p><br><br>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                           <a href="insert.php" class="btn btn-primary">Make booking</a>
                            <a href="index.php" class="btn btn-secondary">Go back</a>
                        </form>
                    </div>
            </div>        
        </div>
    </div>

  
</body>

</html>