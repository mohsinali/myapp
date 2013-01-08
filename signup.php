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
        <div data-role="page" id="signup_page" data-close-btn-text="Close">
            <div data-theme="a" data-role="header">
                <h1>Sign Up</h1>
            </div>
            <div data-role="content">
                <form name="signup" method="post" action="index.php">
                    Email <input type="text" data-mini="true" name="email" />
                    Country 
                    <select name="country" id="country" data-native-menu="false" data-mini="true" tabindex="-1">
                        <option data-placeholder="true">Custom menu example</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="UAE">UAE</option>
                    </select>
                    Password <input type="password" name="password" data-mini="true" />
                    Confirm Password <input type="password" name="conf_password" data-mini="true" />
                    
                    <input type="submit" id="signup" name="btn_signup" value="Signup" />
                </form>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>