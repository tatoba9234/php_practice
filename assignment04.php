<?php
//課題1
function foo($num){
    return $num * 2;
}
$num = 3;
 echo foo($num);
 echo "\n";
 
//課題2
function f($a, $b) {
    return $a + $b;
}

$a = 4;
$b = 6;
echo f($a, $b);
echo "\n";


//課題3
function kakezan($arr) {
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  return $result;
}
$arr = array(1, 3, 5, 7, 9);
echo kakezan($arr);
echo "\n";


//課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(1, 3, 5, -6, -8));
echo "\n";

$names = array("tato", "jiro");
array_push($names, "saburo","yonro");
print_r($names);
echo "\n";


//課題5 array_merge
$teams =array("red", "blue", "yellow");
$name_team = array_merge($names, $teams);
print_r($name_team);
echo "\n";

//課題5 time,date
/*$timestamp = time();
echo $timestamp;

echo date("Y/m/d", $timestamp);
echo "\n";
echo date(DATE_ATOM);
echo "\n";

//課題5 mktime
$time = mktime(9);
var_dump(date('Y年m月d日h時i分s秒', $time));
*/

//現在の日時を取得する
//タイムゾーンの設定
ini_set('date.timezone', 'Asia/Tokyo');
$today = date("Y年m月d日 h時i分");
echo($today);
?>