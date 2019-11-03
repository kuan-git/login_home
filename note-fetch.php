<?php
$dns="mysql:host=localhost;dbname=mydb;charset=utf8";
$pdo=new PDO($dns,'root','');

$sql="select name from user where pw='111'";

// id acc pw  name addr                    tel           birthday  email
// 1   A  111 alex 台北市中山區中山北路260號 0988-123-456 1970/3/12  alex@fmail.com
// 2   BB 111 baby 南投縣                   0900-123-456 2000/10/10 baby@msn.com


$d=$pdo->query($sql);   //query($sql)結果為 PDO_Statement object 
$data=$d->fetch(PDO::FETCH_ASSOC);  //fetch將PDO_Statement(陳述式)物件再抽出為array
//array的內容第一筆為 [name]=>alex，第二筆為 [name]=>baby。
print_r($d);
//印出$pdo->query($sql)的型態([queryString] => select name from user where pw='111' )
echo "<br>".gettype($d)."<br>"; //顯示"object"

$data=$d->fetch(PDO::FETCH_ASSOC);//找到的資料為[name] => baby
print_r($data); //Array ( [name] => baby )
echo "<br>"."----------------------------------------"."<br>";

$sql2="select * from user ";
$rows=$pdo->query($sql2)->fetch(PDO::FETCH_ASSOC);
    
foreach ($rows as $k => $v) {
    echo $k."<br>";
    echo $v."<br>";
}