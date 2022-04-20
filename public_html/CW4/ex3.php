<?php 

function triangle($n) {
    for($x = 0; $x <= $n; $x++) {
        for($y = 0; $y <= $x; $y++) {
            echo "*";
        }
        echo "<br>";
    }
}
triangle(5);
?>