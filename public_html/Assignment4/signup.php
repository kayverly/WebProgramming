<!DOCTYPE html>
<html>
    <body>
        <?php 
            include 'common.php';
            get_header(); 
        ?>
    <form action="/signup-submit.php">
            <fieldset class="column">
            <legend>New User Signup:</legend>

            <label class= "left" for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            
            <label class= "left" for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male">Male
            <input type="radio" id="female" name="gender" value="female">Female<br><br>

            <label class= "left" for="age">Age:</label>
            <input type="text" id="age" name="age"><br><br>

            <label class= "left" for="type">Personality type:</label>
            <input type="text" id="type" name="type"><br><br>

            <label class= "left" for="os">Favorite OS:</label>
            <select name="OS" id="OS">
                <option value="windows">Windows</option>
                <option value="apple">Apple</option>
            </select><br><br>

            <label class= "left" for="seek_age">Seeking age:</label>
            <p><input type="text" id="name" name="low" size="5px"> to <input type="text" id="name" name="high" size="5px"></p>
            

            <input type="submit" value="Sign Up">
            </fieldset>
            </form>
            <br><br>
            <?php 
            get_footer();
            ?>
    </body>
</html>