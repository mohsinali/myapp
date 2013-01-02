
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
                <h1>Sign In</h1>
            </div>
            <div data-role="content">
                <form name="signin" method="post">
                    Email <input type="text" name="username" />
                    Password <input type="password" name="password" />
                    <button>Submit</button>
                </form>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>