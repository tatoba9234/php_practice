<?php

function foo($num){
    return $num * 2;
}

$num = 3;
 echo foo($num);
 echo "\n";
 

function f($a, $b) {
    return $a + $b;
}

$a = 4;
$b = 6;
echo f($a, $b);
echo "\n";


function kakezan($arr) {
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    echo $result;
}
kakezan($array(1, 3, 5, 7, 9));
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    echo $max_number;
}

max_array($array(5,  7, 9, -8, -9));
echo "\n";

    $names = array("tato", "jiro");
array_push($names, "saburo","yonro" );
echo $names;

?>