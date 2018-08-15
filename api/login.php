<?php
    //引入connect.php
    include 'connect.php';
    $address = isset($_GET['address'])?$_GET['address'] : null;
    $password = isset($_GET['password'])?$_GET['password'] : null;


    //查找数据库中是否存在所输入的用户名或密码
    $sql = "select * from register where Email = '$address' and psw = '$password'";
    //执行sql语句
    $result = $conn->query($sql);
    if($result->num_rows>0){
        echo "no";
    }else{
        echo "yes";
    }

?>