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
</body>
</html>

