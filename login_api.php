<?php
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    echo '接收到 '.$acc.' 和 '.$pw;

    $dsn="mysql:host=localhost;dbname=mydb;charset=utf8";
    $pdo=new PDO($dsn,'root','');
    // $sql="select * from user ";
    $sql="select id from user where acc='$acc' && pw='$pw'";
    // $sql = "EXPLAIN SELECT * FROM `user` WHERE `acc`=\'A\' && `pw`=111";

    $r=$pdo->query($sql);
    $rows=$r->fetch();
    
    
    echo $rows[0]."<br>";
    print_r($rows);
    echo "<br>";
    echo $rows[2];
    echo $rows[3];
    echo $rows[4];

    //echo gettype($allData)."<br>";
    // print_r($allData[0]['tel']);


?>