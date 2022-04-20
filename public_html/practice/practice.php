<?php 
$a = array(1, 2, array("a", "b", "c")); 
var_dump($a); 
?>
<br>
<?php
$b = 3.1; 
$c = true; 
var_dump($b, $c); 
?>
<br>
<?php 
$var_name1 = 678; 
$var_name2 = "a404"; 
$var_name3 = "770"; 
$var_name4 = "We r guuci over here!!! "; 
$var_name5 = 698.99; 
$var_name6 = +125689.66;
echo var_dump($var_name1)."<br>"; 
echo var_dump($var_name2)."<br>"; 
echo var_dump($var_name3)."<br>"; 
echo var_dump($var_name4)."<br>"; 
echo var_dump($var_name5)."<br>"; 
echo var_dump($var_name6)."<br>"; 
?>

<?php
$lname=array("Ali","Tyson","Lewis");
$age=array("38","33","35");
$gucci=array_combine($lname,$age);
print_r($gucci);
?>
