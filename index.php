<!doctype html>
<html>
<body>
<title>Week3 Assignment</title>
<h1>Homework 3</h1>
<h2>Adding Backslash In Front of Specified Character</h2>
<?php
$str = addcslashes("Hi, My name is Sanchit Gupta and I am pursuing my masters
in Information systems","S");
echo($str);
?>
<h3>Get The Length Of The String of above mentioned syntax</h3>
<?php
echo strlen("Hi, My name is Sanchit Gupta and I am pursuing my masters in Information Systems");
?>
<h4>Breaking a string into an  Array</h4>
<?php
$str = "I currently have three courses in my first semester.";
print_r (explode(" ",$str));
?>
</body>
</html>

