<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：其它类型转成字符型
/*
	总结：
	(1)NULL和false转成空字符串
	(2)整数0，转成"0"
*/
$a = 100;        // "100"
$a = 0;          // "0"
$a = 10.98;      // "10.98"
$a = NULL;       // ""
$a = true;       // "1"
$a = false;      // ""
//使用运算符(string)强制转换
$result = (string)$a;
//打印变量的类型和值
var_dump($result);

?>
