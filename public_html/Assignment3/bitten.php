<!DOCTYPE html>
<html>
    <head>
        <title>Was my lunch eaten?</title>
    </head>
<body>
<?php

    function isBitten() {
        $prob = rand(0,1);
        if ($prob) {
            return true;
        } else {
            return false;
        }
    }

    if(isBitten()) {
        echo "<h1>Charlie ate my lunch!</h1>";
    } else {
        echo "<h1>Charlie did not eat my lunch!</h1>";
    }
?>
</body>
</html>