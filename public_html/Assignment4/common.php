<?php
    function get_header(){
        $header =  "<head><title>NerdLuv</title><link href='./nerdieluv.css' type='text/css' rel='stylesheet' />
                     </head><div id='bannerarea'> <img class='logo' src='./logo.png'><br>where meek geeks meet </div>";
        echo $header;
    }

    function get_footer(){
        $footer = "This page is for single nerds to meet and date each other! <br>
        Type in your personal information and wait for the nerdly luv to begin! <br>
        Thank you for using our site. <br><br> Results and page (C) Copyright NerdLuv Inc. 
        <br><br><a href='./index.php'><img class='icons' src='./back.png'>Back to front page</a><br>";
        echo $footer;
    }

?>