<?php
if(!isset($_SESSION['email']))
    echo "e;rjeljr";


function login($email, $pass){
    $sql = "SELECT * FROM user WHERE email='$email' and passwd='".md5($pass)."'";
    $rs = mysql_query($sql);
    
    if(mysql_num_rows($rs) > 0){
        $_SESSION['email'] = $email;
        return true;
    }else{
        return false;
    }
}
?>
