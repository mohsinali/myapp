
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="js/jquery-1.8.2.min.js">
        </script>
        <script src="js/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="js/my.js">
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    My App
                </h3>
            </div>
            <div data-role="content">
                <a href="signin.php" data-rel="dialog">Sign in</a>
                <div id="dialog" data-role="dialog">Sign In</div>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>