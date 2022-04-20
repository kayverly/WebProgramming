<!DOCTYPE html>
<html>
    <head>
        <title>Arrays and Functions</title>
    </head>
<body>
    <?php
        $month = array('January','February','March','April','May',
        'June','July','August','September','October','November','December');
        
        echo "<h2>List of months with regular for loop</h2> <br>";
        for($x=0; $x < count($month); $x++) {
            echo $month[$x] . "<br>";
        }

        echo "<br>";
        echo "<h2>Sorted list of months with regular for loop</h2> <br>";
        sort($month);
        for($x=0; $x < count($month); $x++) {
            echo $month[$x] . "<br>";
        }

        $month = array('January','February','March','April','May',
        'June','July','August','September','October','November','December');
        
        echo "<br>";
        echo "<h2> List of months with foreach loop</h2> <br>";
        foreach($month as &$val) {
            echo $val . "<br>";
        }

        echo "<br>";
        echo "<h2> Sorted list of months with foreach loop</h2> <br>";
        sort($month);
        foreach($month as &$val) {
            echo $val . "<br>";
        }
    ?>
</body>
</html>