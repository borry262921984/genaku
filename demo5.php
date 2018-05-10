<?php
    //载入xml
    $_sxe = simplexml_load_file('test.xml');
    //获取version的值
    $_version = $_sxe->xpath('/root/user');
    $jsonStr = json_encode($_version);
    $jsonArray = json_decode($jsonStr,true);
    print_r($_version[1]);
    print_r($jsonArray);

    echo $_version[1][0];
?>