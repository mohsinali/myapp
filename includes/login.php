<?php include("includes/db.php"); ?>
<?php
if (isset($_POST['btn_signin'])):
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (login($email, $pass)){?>
        <script>
            var dataStore = window.sessionStorage;
            var email = '<?php echo $email ?>';
            dataStore.setItem('email',email);
        </script>
<!-- echo "Login";//redirect("home.php?msg=signin"); -->
        
     
<?php
    echo redirect("home.php?msg=signin");
    }else {?>
     <script>
        $( document ).on( "pageinit", function() {
//            $.mobile.changePage('#popup','pop',false,true)

        $("<div class='ui-loader ui-overlay-shadow ui-body-e ui-corner-all' style='padding:10px'>Email and Password you entered is incorrect. Please try again.</div>").css({ "display": "block", "opacity": 0.96, "top": $(window).scrollTop() + 100 })
            .appendTo( $.mobile.pageContainer )
            .delay( 2500 )
            .fadeOut( 400, function(){
              $(this).remove();
            });
        });
      </script>
<?php  }
endif;
?>

<?php
  /**********************************/
  // Logout
  if($_GET['action'] == "logout"):?>
      <script>
        var dataStore = window.sessionStorage;
        dataStore.removeItem('email');
      </script>
<?php
  endif;
  // htt p://balaarjunan.wordpress.com/2010/11/10/html5-session-storage-key-things-to-consider/
  // htt p://html5-demos.appspot.com/static/html5storage/index.html#slide68
?>