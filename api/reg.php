<?php
    //引入connect.php
    include 'connect.php';

    $address= isset($_POST['address']) ? $_POST['address'] : null; 
    $password = isset($_POST['password']) ? $_POST['password'] : null; 
    //查找数据库是否存在同名用户
    $sql = "insert into register(email,psw) values('$address','$password')";
    $result = $conn->query($sql); 
    if($result){
        echo "success";
    }
    else{
        echo "fail";
    } 

?>