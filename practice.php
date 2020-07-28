<?php
function sum($num){
    return $num*2;
}
echo sum(3);

function f($a,$b){
    return $a + $b;
}
echo f(2,4);

function a($arr){
    $result=1;
    foreach($arr as $num){
        $result*=$num;
    }
    return $result;
}
echo a([1,3,5,7,9]);

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
       if ($max_number < $a){
           $max_number = $a;
       }
    }
    return $max_number;
}
echo max_array([1,13,6,8,]);

$fruits = ['apple','orange','melon'];
array_push($fruits,'banana','pineapple');
print_r($fruits);

$fruits1 = ['apple','orange'];
$fruits2 = ['melon','banana'];
$fruits3 = ['pineapple'];
$fruits_marge = array_merge($fruits1,$fruits2,$fruits3);
print_r($fruits_marge);

$time = mktime(0,0,0,1,1,2020);
var_dump(date('Y年m月d日h時i分s秒', $time));

echo date('Y-m-d H:i:s' );