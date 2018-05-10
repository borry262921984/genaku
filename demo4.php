<?php

    //本例子采用作为实例标签

    //载入xml
    $_sxe = simplexml_load_file('test.xml');

    //  1)  读一级标签的值
    // 就算version自动列成数组，但简单输出方法没有指定索引号，所以以第一个打印
    echo '1 -> ';
    echo $_sxe->version;
    echo "\n\n";

    //  2)  如果加上索引号则可以指定打印目标（前提是存在的数组索引号）
    echo '2 -> ';
    echo $_sxe->version[2];
    echo "\n\n";

    //  3)  如果有多个version标签$_sxe->version其实是一个数组
    echo '3 -> ';
    print_r($_sxe->version);
    echo "\n\n";

    //  4)  遍历数组（一级）标签
    echo '4 -> ';
    foreach ($_sxe->version as $v){
        echo '['.$v.']';
    }
    echo "\n\n";

    //  5)  访问二级数组的标签
    //如果要访问二级标签，必须一层一层指明
    echo '5 -> ';
    echo $_sxe->user[1]->name;
    echo "\n\n";

    //  6)  遍历所有的二级标签的name值
    echo '6 -> ';
    foreach ($_sxe->user as $_user){
        echo '['.$_user->name.']';
    }
    echo "\n\n";

    //  7)  输出第二个user里的author的性别<author sex="女">谁谁谁</author>
    //attributes()函数能获取SimpleXML元素的属性
    //如果元素里面有多个属性，则以属性名称来指向属性内容（虽然不显示数字索引，但默认生成）
    //元素指针也会生成数字索引，顺序则按照属性在元素内的先后顺序生成
    //例1：<span sex='女' E_sex='woman'>    生成数组是[0]->女 [1]->woman
    //例2：<span E_sex='woman' sex='女'>    生成数组是[0]->woman [1]->女
    echo '7 -> ';
    print_r($_sxe->user[1]->author->attributes());
    echo "\t";
    echo $_sxe->user[1]->author->attributes()['E_sex'];
    echo "\n\t";
    echo $_sxe->user[1]->author->attributes()[1];
    echo "\n\n";

    //  8)  使用xpath来获取xml节点操作
    //获取version标签的值
    echo '8 -> ';
    $_version = $_sxe -> xpath('/root');
    //由于转换后属于SimpleXML数组，所以需要通过json来编译成普通数组才能正常操作
    $jsonStr = json_encode($_version);
    $jsonArray = json_decode($jsonStr,true);
    print_r($jsonArray[0]);
    echo '这是最高级的数组元素：'.$jsonArray[0]['user'][2]['author'];

?>