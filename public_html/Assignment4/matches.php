<!DOCTYPE html>
<html>
    <body>
        <?php 
            include 'common.php';
            get_header(); 
        ?>
        
        <form action="./matches-submit.php" method="get">
            <fieldset class="column">
            <legend>Returning User:</legend>
            <label class="left" for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <input type="submit" value="View My Matches">
            </fieldset>
        </form>
        <br><br>
        <?php 
            get_footer(); 
        ?>
    </body>
</html>