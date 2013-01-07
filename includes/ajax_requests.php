<?php
    // Check login
    if($_POST['action'] == "check_login"){
        if(isset($_SESSION['email']))
            return "true";
        else
            return "false";
    }
?>
