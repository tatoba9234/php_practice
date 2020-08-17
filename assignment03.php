<?php

$name = "Koyo";
if ($name = "Koyo") {
    echo "私は{$name}です";
} else {
    echo "{$name}ではありません";
}


$total = 0;
for ($i =0; $i <= 1000; $i++) {
    $total +=$i;
}
echo $total;


$fruits = array ("apple", "banana", "grape", "lemon", "orange");
foreach($fruits as $fruit) {
    echo $fruit . "\n";
}

$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0){
        echo $i . "\n";
    }
}