<?php

function double($number){
  return $number * 2;
}
echo double(2);


function f($a, $b){
  return $a + $b;
}
echo f(2, 3);

function c($arr){
  $result = $arr[0];
  for($i = 1; $i < count($arr); $i++){
    $result *= $arr[$i];
  }
  return $result;
}
echo c(array(1, 3, 5, 7, 9));


function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
  if($max_number < $a){
    $max_number = $a;
  }
 }

 return $max_number;
 }
echo max_array(array(5, 4, 8, 10));


$str = "<h1>strip_tags関数</h1>"
 . "<p>タグ取り除く</p>";
echo strip_tags($str) ."\n";

$str = <<<EOM
 <h1>strip_tags関数</h1>
 <p>タグ取り除く</p>
EOM;
var_dump( strip_tags($str, "<p>"));


$stack = array("orange", "banana");
array_push($stack, "apple", "rasberry");
print_r($stack);


$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);


echo '現在のUnixタイムスタンプ:'.time();
echo '<br>';
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ:'.$nweek;

$timestanp = mktime(0, 0, 0, 12, 10, 2019);
echo $timestanp;


echo date( "Y/m/d" ) ;



?>
