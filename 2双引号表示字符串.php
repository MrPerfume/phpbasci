<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php


//用双引号表示字符串，双引号内的转义字符都可以用
$name = "周更生";
$sex = "男";
$age = 24;
$str = "<h2>\"{$name}\"的基本信息如下</h2>";
$str .= "\n姓名：$name";
$str .= "\n<br>性别：$sex";
$str .= "\n<br>年龄：$age";
echo $str;


?>