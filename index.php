
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
        <script>
            $( document ).on( "pageinit", function() {//                
                $.mobile.changePage('#popup','pop',false,true)
        
            $("<div class='ui-loader ui-overlay-shadow ui-body-e ui-corner-all' style='padding:10px'>Email and Password you entered is incorrect. Please try again.</div>").css({ "display": "block", "opacity": 0.96, "top": $(window).scrollTop() + 100 })
                .appendTo( $.mobile.pageContainer )
                .delay( 2500 )
                .fadeOut( 400, function(){
                  $(this).remove();
                });
            });
        </script>
    </head>
    <body>
        <!-- Home -->
        <!-- Start of first page: #one --> 
<div data-role="page" id="one"> 
 
	<div data-role="header" data-theme="b" data-position="fixed"> 
		<h1>Multi-page</h1> 
	</div><!-- /header --> 
 
	<div data-role="content" >                
		<h2>One</h2> 
		<?php print_r($_POST); ?>
		<p>I have an <code>id</code> of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>	
		
		<p>This is a multi-page boilerplate template that you can copy to build your first jQuery Mobile page. This template contains multiple "page" containers inside, unlike a <a href="page-template.html"> single page template</a> that has just one page within it.</p>	
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p> 
		<p>You link to internal pages by referring to the <code>id</code> of the page you want to show. For example, to <a href="#two" >link</a> to the page with an <code>id</code> of "two", my link would have a <code>href="#two"</code> in the code.</p>	
 
		<h3>Show internal pages:</h3> 
		
                <?php
                // Sign In
                if (isset($_POST['email'])):
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    if (login($email, $pass))
                        echo redirect("home.php");
                    else {
                        echo "<p>The email and password you entered is not correct. Please try again.</p";
                    }
                endif;

                // Sign Up
                if (isset($_POST['country'])):

                endif;
                ?>
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
 
 
<!-- Start of third page: #popup --> 
<div data-role="dialog" id="popup" data-theme="b"> 
 
	<div data-role="header" data-theme="b"> 
		<h1>Dialog</h1> 
	</div><!-- /header --> 
 
	<div data-role="content" data-theme="d">	
		<h2>Popup</h2> 
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>		
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back to page "one"</a></p>	
	</div><!-- /content --> 
	
	
</div><!-- /page popup -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    My App
                </h3>
            </div>
            <div data-role="content">
                
                <div class="ui-grid-solo">
                    <div class="ui-block-a" align="center">
                        <a href="signin.php" data-rel="dialog">Sign In</a>
                        <a href="signup.php" data-rel="dialog">Sign Up</a>
                        <?php
                            // Sign In
                            if(isset($_POST['email'])):
                                $email = $_POST['email'];
                                $pass = $_POST['password'];
                                if (login($email, $pass))
                                    echo redirect("home.php");
                                else {
                                    echo "<p>The email and password you entered is not correct. Please try again.</p";
                                }                                
                            endif;
                            
                            // Sign Up
                            if(isset($_POST['country'])):
                                                                
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>