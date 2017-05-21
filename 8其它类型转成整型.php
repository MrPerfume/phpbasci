<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：其它类型转成整型
/*
	总结：
	(1)如果以数值开头的字符串，可以转成整型，并去掉后面字符
	(2)如果开头不含数值的字符串，将转成0。
*/
$a = "";		 // 0
$a = "10px";     // 10
$a = "120";      // 120
$a = "abc";      // 0
$a = 10.98;      // 10
$a = NULL;       // 0
$a = true;       // 1
$a = false;      // 0
//使用运算符(int)强制转换
$result = (int)$a;
//打印变量的类型和值
var_dump($result);

?>
