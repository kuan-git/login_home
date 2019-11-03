<?php
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    // echo $acc.'  '.$pw;

    $dsn="mysql:host=localhost;dbname=mydb;charset=utf8";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from user ";

    $r=$pdo->query($sql);
    $rows=$r->fetch();
    
    
    echo $rows[4];
    //echo gettype($allData)."<br>";
    // print_r($allData[0]['tel']);


?>