<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：其它类型转成布尔型
//总结：这些数值将转成false
// 0、0.0、""、"0"、array()、null
//资源类型永远为TRUE。
$a = 100;        // true
$a = 0;          // false
$a = 0.98;       // true
$a = "";		 // false
$a = "10px";     // true
$a = "120";      // true
$a = NULL;       // false
//使用运算符(bool)强制转换
$result = (bool)$a;
//打印变量的类型和值
var_dump($result);

?>
