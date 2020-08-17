<?php


$country = "France";
switch ($country) {
    case "US":
    case "Canada":
     echo "North America";
    break;
    case "China":
    case "Japan":
    case "Korea":
     echo "Asia";
     break;
    default: 
     echo "Others";
}

$fruits = array ("apple", "banana", "lemon");
echo count($fruits);

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "\n";
}