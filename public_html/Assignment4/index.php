<!DOCTYPE html>
<html>
    <body>
       <?php 
            include 'common.php';
            get_header(); 
        ?>
        
        <div class="nav">
            <h5>Welcome!</h5>
            <a href="./signup.php"><img class="icons" src="./signuplogo.png">Sign up for a new account</a><br>
            <a href="./matches.php"><img class="icons" src="./heart.png">Check for your matches</a><br>
        </div>
        <br><br>
        <?php 
            get_footer();
        ?>
    </body>
</html>