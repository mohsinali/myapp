<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
        <script src="js/jquery-1.8.2.min.js">
        </script>
        <script src="js/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="js/my.js">
        </script>
        <?php include("includes/functions.php"); ?>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h1>Home</h1>
            </div>
            <div data-role="content">                
                <?php
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
//                    if(login($email, $pass))
//                      echo "Logged in";
//                    else{
//                        echo "The email and password you entered is not correct.";
//                        echo "<a href='signin.php' data-rel='dialog'>Sign in</a>";
//                    }
                ?>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>