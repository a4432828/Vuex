<?php
    $name=$_REQUEST['username'];
    $pwd=$_REQUEST['password'];

    $data=array('username'=>$name,'password'=>$pwd);

 

    $cb=$_GET['cb'];

    echo $cb.'('.json_encode($data).')';
    exit(0);//退出程序
