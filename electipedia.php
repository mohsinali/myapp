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
                <a href="" onclick="window.location.replace('index.php');" data-role="button">Home</a>
                <h1>Electipedia</h1>
            </div>
            <div data-role="content">
                                
                <ul data-role="listview">
                    <li>
                        <a href="news_detail.php">
                            <img src="images/album-bb.jpg" class="ui-li-thumb">
                            <h3>Broken Bells</h3>
                            <p>Broken Bells</p>
			</a>
                    </li>
                    <li><a href="audi.html">Audi</a></li>
                    <li><a href="bmw.html">BMW</a></li>
                </ul>
                
                
            </div>
            <?php include("includes/footer.php"); ?>                
        </div>        
    </body>
</html>