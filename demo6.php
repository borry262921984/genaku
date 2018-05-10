<?php
    //使用DOMDocument来解析xml

    //创建dom对象
    $_doc = new DOMDocument();
    //载入xml文件
    $_doc->load('test.xml');
    //取第一个version的值，getElementsByTagName就是查找传入的标签
    $_version = $_doc->getElementsByTagName('version');
    //item(0)表示第几个，nodeValue表示标签里的值
    echo $_version->item(1)->nodeValue;
    echo "<hr/>\n";

    //遍历
    foreach ($_version as $_v){
        echo $_v->nodeValue."\n";
    }
    echo "<hr/>\n";

    //根据元素名，输出多层内容
    $_name = $_doc->getElementsByTagName('name');
    //nodeType的作用是以数字值返回节点类型。如果节点是元素节点返1；属性节点返2。
    echo $_name->item(1)->nodeType;    echo "\n";
    //nodeName返回标签名
    echo $_name->item(1)->nodeName;    echo "\n";
    //nodeValue返回标签的值
    echo $_name->item(1)->nodeValue;

?>