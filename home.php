<?php ob_start(); session_start(); ?>
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
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="b" data-role="header">
                <a href="" onclick="window.location.replace('index.php?action=logout');" data-role="button">Logout</a>
                <h1>My App</h1>
            </div>
            <div data-role="content">                
                Welcome <span id="email"></span>!!!                
            </div>
            
            <div data-role="footer" data-position="fixed" data-theme="d">
                <div data-role="navbar">
                    <ul>
                        <li><a href="a.html" data-role="button" data-icon="star">Election News</a></li>
                        <li><a href="b.html" data-role="button" data-icon="star">Electipedia</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
                
        </div>
        <script>
            //App custom javascript            
//            window.location = "index.php";
            //App custom javascript
            var dataStore = window.sessionStorage;
//            dataStore.setItem('key','value');
            //alert(dataStore.getItem('email'));
            $("#email").html(dataStore.getItem('email'));
            
        </script>
    </body>
</html>