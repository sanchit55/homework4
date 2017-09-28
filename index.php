<?php

$obj = new main();
$text = "Hi, My name is Sanchit Gupta";
$obj -> printthis($text);
$obj -> strtoupper();
$obj -> strtolower();
$obj -> strrev();
$obj -> bin2hex();
$obj -> ucwords();
$obj -> str_repeat();
$obj -> strlen();
$obj -> str_shuffle();
$obj -> lcfirst();
$obj -> array_merge();
$obj -> array_reverse();
$obj -> array_sum();
$obj -> array_push();
$obj -> array_product();
$obj -> array_pop();
$obj -> array_unique();
$obj -> array_splice();
$obj -> array_diff();
$obj -> array_combine();

class main {
public function __construct() {
echo 'hello i\'m an Object </br>';
}
public function printthis($text) {
echo '<h1>print function demo </h1>';
print($text);
echo '<hr>';
}

public function strtoupper() {
echo '<h1>converting the string to uppercase </h1>';
$a = "information systems";
$a = strtoupper($a);
echo $a;
echo '<hr>';
}

public function strtolower() {
echo '<h1>converting the string to lowercase </h1>';
$b = "Web SystemS";
$b = strtolower($b);
echo $b;
echo '<hr>';
}

public function strrev() {
echo '<h1>Reversing a string of the function </h1>';
$c = "We are doing week three assignment";
$c = strrev($c);
echo $c;
echo '<hr>';
}

public function bin2hex() {
echo '<h1>Converting a string function from Binary to Hexadecimal </h1>';
$d = "1010111";
$d = dechex(bindec($d));
echo $d;
echo '<hr>';
}


public function ucwords() {
echo '<h1>Converting Every first character of each word into uppercase </h1>';
$e = "i am pursuing my masters from new jersey institute of technology";
$e = ucwords($e);
echo $e;
echo '<hr>';
}

public function str_repeat() {
echo '<h1>Repeat a string of the function </h1>';
echo str_repeat("Kings Building", 5);
echo '<hr>';
}

public function strlen() {
echo '<h1>To obtain the length of the string </h1>';
$f = "I wrote my name";
$g = strlen($f);
echo "The length of the string is $g";
echo '<hr>';
}

public function str_shuffle() {
echo '<h1>Shuffling the characters in the string function</h1>';
$h = "Rolls Royce is the most expensive car";
$h = str_shuffle($h);
echo $h;
echo '<hr>';
}

public function lcfirst() {
echo '<h1>Converting first character into lowercase </h1>';
$i = "USER EXPERIENCE DESIGN";
$i = lcfirst($i);
echo $i;
echo '<hr>';
}


public function array_merge() {
echo '<h1>Merging two arrays</h1>';
$a1 =array("SAD","GUI");
$a2 =array("Java","PHP");
print_r(array_merge($a1,$a2));
echo '<hr>';
}

public function array_reverse() {
echo '<h1>Reverse arranging an array</h1>';
$a3 =array("Mango","Kiwi","banana");
print_r(array_reverse($a3));
echo '<hr>';
}

public function array_sum() {
echo '<h1>Getting the sum of an array</h1>';
$a4 =array(10 ,20, 30);
echo "Sum = " . (array_sum($a4));
echo '<hr>';
}

public function array_push() {
echo '<h1>pushing elements onto the end of the array</h1>';
$a5 =array("Audi" ,"Mercedes", "Tiguan");
array_push ($a5, "BMW", "Pagani");
print_r($a5);
echo '<hr>';
}

public function array_product() {
echo '<h1>pushing elements onto the end of the array</h1>';
$a6 =array(10 ,20, 30);
echo "Product = " . array_product($a6);
echo '<hr>';
}

public function array_pop() {
echo '<h1>poping elements onto the end of the array</h1>';
$a7 =array("Audi" ,"Mercedes", "Tiguan");
array_pop($a7);
print_r($a7);
echo '<hr>';
}

public function array_unique() {
echo '<h1>Obtaining unique elements from an array</h1>';
$a8 =array("x" => "Audi" ,"Mercedes", "Tiguan", "y" => "BMW", "Audi", "pagani");
$bac =array_unique($a8);
print_r($bac);
echo '<hr>';
}

public function array_splice() {
echo '<h1>splicing the elements of the array</h1>';
$a9 =array("Audi" ,"Mercedes", "Tiguan", "pagani");
$sac =array("Porsche", "Landrover", "Jetta");
array_splice($a9, 1, 2, $sac);
print_r($a9);
echo '<hr>';
}

public function array_diff() {
echo '<h1>Differentiating the elements of the array</h1>';
$a10 =array("Audi" ,"Mercedes", "Tiguan", "pagani");
$a11 =array("Audi", "Landrover", "Jetta", "pagani");
$dac =array_diff($a10, $a11);
print_r($dac);
echo '<hr>';
}

public function array_combine() {
echo '<h1>Combing the elements of the array</h1>';
$a12 =array("Audi" ,"Mercedes", "Tiguan", "pagani");
$a13 =array("2008", "2011", "2013", "2016");
$eac =array_combine($a12, $a13);
print_r($eac);
echo '<hr>';
}


public function
__destruct() {

echo '</br>
I\'m Done';
}
}
?>

