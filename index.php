
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
        <script src="js/m-y.js">
        </script>
        <?php include("includes/db.php"); ?>
        <?php include("includes/functions.php"); ?>
    </head>
    <body>
        <!-- Home -->
        <!-- Start of first page: #one --> 
<div data-role="page" id="one"> 
 
	<div data-role="header" data-theme="b" data-position="fixed"> 
            <a href="home.php" data-role="button">Home</a>
            <h1>Splash</h1>
	</div><!-- /header --> 
 
	<div data-role="content" >                
		<h2>Welcome to My App</h2> 
                <?php include("includes/login.php"); print_r($_SESSION); ?>
		<p>I have an <code>id</code> of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>	

                <p><a href="#signin" data-role="button">Sign In</a></p>	
		<p><a href="#popup" data-role="button" data-rel="dialog" data-transition="pop">Sign Up</a></p> 
	</div><!-- /content --> 
	
	<div data-role="footer" data-position="fixed" data-theme="d"> 
		<h4>Page Footer</h4> 
	</div><!-- /footer --> 
        
</div><!-- /page one --> 
 
 
<!-- Start of second page: #two --> 
<div data-role="page" id="signin"> 
 
	<div data-role="header" data-theme="b"> 
            <a href="#one" data-icon="delete">Cancel</a>
            <h1>Sign In</h1> 
	</div><!-- /header --> 
 
	<div data-role="content">            
		<form name="signin" method="post" action="index.php">
                    Email <input type="text" name="email" />
                    Password <input type="password" name="password" />
                    <input type="submit" id="signin" name="btn_signin" value="Signin" />
                </form>
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Cancel</a></p>	
		
	</div><!-- /content --> 
	
	<div data-role="footer" data-position="fixed" data-theme="d"> 
		<h4>Page Footer</h4> 
	</div><!-- /footer --> 
</div><!-- /page two --> 
    </body>
</html>