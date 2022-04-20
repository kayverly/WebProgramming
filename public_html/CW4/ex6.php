<?php

function remove_all($str, $c) {
    $new = "";
    for($i=0; $i<strlen($str); $i++){
        if($str[$i]!=$c[0])
        $new .= $str[$i];
        }
        echo $new;
          
        }
        remove_all("Every year I scream summer is Here","e");
?>