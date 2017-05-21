<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php


//长字符串表示方法
$name = "周更生";
$edu = "北京理工大学";
$str = <<<EOT
<h1 style="background-color:yellow;">中越联合公报：早日达成南海行为准则</h1>
<p onMouseOver="pOver(this)" onMouseOut="pOut(this)">应中国共产党中央委员会总书记、中华人民共和国主席习近平的邀请，越南共产党中央委员会总书记阮富仲于2015年4月7日至10日对中华人民共和国进行正式访问。访问期间，中共中央总书记、国家主席习近平与阮富仲总书记举行会谈。中共中央政治局常委、国务院总理李克强，中共中央政治局常委、全国人大常委会委员长张德江。</p>
<div>{$name}的毕业院校：{$edu} {10+20}</div>
<script type="text/javascript">
function pOver(pObj)
{
	pObj.style.backgroundColor = "yellow";
}
function pOut(pObj)
{
	pObj.style.backgroundColor = "";
}
</script>
EOT;
echo $str;
?>