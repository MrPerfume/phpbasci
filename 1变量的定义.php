<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
//(1)定义变量
$name = "周更生";
$sex = "男";
$age = 24;
//(2)构建输出结果
$str = "<h2>$name 的基本信息如下</h2>";
$str .= "姓名：$name";
$str .= "<br>性别：$sex";
$str .= "<br>年龄：$age";
//(3)输出结果
echo $str;


?>