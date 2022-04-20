<?php

function countWords($str) {
    $splitstr = explode(' ', $str);
    print_r(array_count_values($splitstr));
}
countWords("Hi my name is .. Who? My name is .. What? My name is Kayla Laverne Walker!");
?>