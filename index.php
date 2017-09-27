<!doctype html>
<html>
<body>
<title>Week3 Assignment</title>
<h1>Homework 3</h1>
<hr>
<h3>Adding Backslash In Front of Specified Character</h3>
<?php
$str = addcslashes("Hi, My name is Sanchit Gupta and I am pursuing my masters
in Information systems","S");
echo($str);
?>
<hr>
<h3>Get The Length Of The String of above mentioned syntax</h3>
<?php
echo strlen("Hi, My name is Sanchit Gupta and I am pursuing my masters in Information Systems");
?>
<hr>
<h3>Breaking a string into an  Array</h3>
<?php
$str = "I currently have three courses in my first semester.";
print_r (explode(" ",$str));
?>
<hr>
<h3>Replacing some characters in the string</h3>
<?php
echo str_ireplace("masters","masters of science","Hi, My name is Sanchit Gupta and
I am pursuing my masters in Information Systems");
?>
<p>" In this string function I replaced 'masters' to 'masters of science' from the
above mentioned line."<p> 
<hr>
<h3>Repeating any particular number or name</h3>
<?php
echo str_repeat("5",10);
?>
<p> In this string function I took 5 and got it repeated 10 times.</p>
<hr>
<h3>Comapring 2 strings</h3>
<?php
echo strcmp("I am doing IS601 assignment","I am doing IS601 assignment");
?>
<p> If this function outputs the value os "0", that means the strings are equal.
And provides another value, that means they are not equal.</p>
</body>
</html>

