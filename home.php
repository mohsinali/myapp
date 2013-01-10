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
        <style>
            h3 a {text-decoration: none; color:#000;}
        </style>
        <style>
            .content {font-size: 12px;}
            p.summary {font-family:Arial; font-size:14px; font-weight:bold; color:#000;}
            h3 {margin-bottom: 0px;}
        </style>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="b" data-role="header" data-position="fixed">
                <a href="" onclick="window.location.replace('index.php?action=logout');" data-role="button">Logout</a>
                <h1>News</h1>
            </div>
            <div data-role="content">                
                
                <?php for($i=1; $i<=10; $i++): ?>
                <div data-role="collapsible" data-mini="true">
                    <h3>Tahir-ul-Qadri preparing for 14th Jan.</h3>
                    <p>
                        Here is the description text.
                        <a href="news_detail.php" data-rel="external">more>></a>
                    </p>
                </div>
                <?php endfor; ?>
                
            </div>
            <?php include("includes/footer.php"); ?>
                
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