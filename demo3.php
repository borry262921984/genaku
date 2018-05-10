<?php
    //载入xml文件，simplexml
    $_sex = simplexml_load_file('test.xml');
    //读取方式

    //简单输出方式
    echo $_sex->asXML();
    echo '<hr/>';
    //数组输出方式
    print_r($_sex);
    echo '<hr/>';
    //包含类型的打印方式
    var_dump($_sex);
    echo '<hr/>';
    //反射
    Reflection::export(new ReflectionClass($_sex));

?>