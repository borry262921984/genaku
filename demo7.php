<?php

    //使用dom创建xml文件
    //声明DomDocument对象
    $_doc = new DOMDocument('1.0','utf-8');

    //使用xml标准化格式输出（层级化结构）
    $_doc->formatOutput = true;

    //使用createElement来创建一个标签
    $_root = $_doc->createElement('root');
    //在root标签里创建一个version标签
    $_version = $_doc->createElement('version');
    //把version标签添加到root标签内
    $_root->appendChild($_version);
    //在version里面填入一个字符串
    $_versionTextNode = $_doc->createTextNode('1.0');
    //将1.0放入version标签
    $_version->appendChild($_versionTextNode);
    //将root主标签添加到xml文件里
    $_doc->appendChild($_root);
    //生成保存xml文件
    $_doc->save('aaa.xml');

?>