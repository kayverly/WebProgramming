<!DOCTYPE html>
<html>
    <head>
        <title>Checker Board</title>
    </head>
<body>
<table style="width= 300px; border=1px; cellspacing=1px; align=center;">

<?php
$count = 0;

for ($x=0; $x<9; $x++) {
    echo "<tr>";
    for ($y=0; $y<9; $y++) {
        $count = $count+1;
        if ($count%2 == 0) {
            echo '<td height="35px"; width="35px"; style="background-color:red";></td>';
        }
        else {

            echo '<td height="35px"; width="35px"; style="background-color:black";></td>';
        }
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>