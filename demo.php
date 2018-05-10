<?php
/*
    $_a = 5;
    //单引号
    $_string1 = 'This is $_a a String!';
    //双引号
    $_string2 = "This is $_a a String!";
    echo $_string1.'<hr/>';
    echo $_string2.'<hr/>';

    //复杂式，多行，特殊字符，单引号，双引号，变量。
    //<<<aaaa表示字符串开始 aaaa；不是字符串的结束
    $_string3 = <<<abcd
    buick
    bmw
    audi
    acura
abcd;

    echo $_string3;
*/
?>


<?php

    //生产一个xml文件

    //xml字符串
    $_xml = <<<_xml
<?xml version="1.0" encoding="UTF-8" ?>
    <root>
        <version>1.0</version>
        <version>2.0</version>
        <version>3.0</version>
        <info>xml解析测试</info>
        <user>
            <name>格纳库网</name>
            <url>http://www.genaku.com</url>
            <author sex="男">李炎恢</author>
        </user>
        <user>
            <name>讴歌官网</name>
            <url>http://www.acura.com</url>
            <author E_sex="woman" sex="女">谁谁谁</author>
        </user>
        <user>
            <name>电驴网</name>
            <url>http://www.vercd.com</url>
            <author sex="男">姓黄的</author>
        </user>
    </root>
_xml;

    //创建一个SimpleXml对象，传入xml字符串
    $_sxe = new SimpleXMLElement($_xml);
    //生成xml文件
    $_sxe->asXML('test.xml');


?>