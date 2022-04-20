<?php 
// set the cookie 
setcookie("username", "iamgucci", time()+60*60*24*7); 
?> 
<html> 
    <body> 
     
    <?php 
    // check if the cookie exists 
    if(isset($_COOKIE["username"])) 
    { 
        echo "Cookie set with value: ".$_COOKIE["username"]; 
    } 
    else 
    { 
        echo "cookie not set!"; 
    } 
    ?> 
     
    </body> 
</html>