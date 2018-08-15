<?php
    header('Content-Type:application/json;charset=utf-8');
    $pageNo = isset($_GET['pageNo'])?$_GET['pageNo']:null;
    $qty = isset($_GET['qty'])?$_GET['qty']:null;

    $filepath = 'data/list.json';

    $file = fopen($filepath, 'r');

    $content = fread($file, filesize($filepath));

    fclose($file);

    $data =json_decode($content);
    $res = array(
        "total" => count($data),
        "data" => array_slice($data,($pageNo-1)*$qty,$qty),
        "pageNo" => $pageNo,
        "qty" => $qty
    );
    echo json_encode($res,JSON_UNESCAPED_UNICODE);
?>