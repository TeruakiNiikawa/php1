<?php
$name = "新川輝明";
if ($name == "新川輝明"){
    echo "私は新川輝明です";
}else{
    echo "あなたの名前ではありません";
}

$total = 0;
echo $total;
for($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple","orange","lemon","grape","pine");
foreach ($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

$name = "新川輝明";
if ($name == "新川輝明"){
    echo "私は新川輝明です";
}else{
    echo "あなたの名前ではありません";
}

$total = 0;
echo $total;
for($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple","orange","lemon","grape","pine");
for ($i = 0; $i < count($fruits); $i++){
    echo "要素は" .$fruits[$i];
    echo "\n";
}

$start = 1;

$end = 100;

for($i = $start; $i < $end; $i++){
  if($i % 5 == 0)
    echo $i
}