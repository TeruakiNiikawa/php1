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

$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
