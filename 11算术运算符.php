<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php


$a = 10;
$b = $a++; // 先赋值再加1。先将变量$a的值，赋值变量$b，然后，再将$a+1
var_dump($a,$b);
//***********************
$a = 10;
$b = ++$a; // 先加1再赋值。先将$a+1，再将结果赋给变量$b
var_dump($a,$b);


$c = ++$a+10;
//$c = $a+++10;
var_dump($a,$c);


?>
