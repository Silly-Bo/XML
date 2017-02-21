<?php
header('Content-type:application/xml;charset=utf-8');
// file_get_contents读取xml文件并获取内容
$xml = file_get_contents('test.xml');
echo $xml;


?>