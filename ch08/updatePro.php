<?php
// 전달된 값 글로벌 변수로 받기
$id = $_REQUEST["id"];
$passwd = $_REQUEST["passwd"];
$name = $_REQUEST["name"];
$tel = $_REQUEST["tel"];

require_once("mydb.php");
$pdo=db_connect();

try {
    $pdo->beginTransaction();
    $sql="update member set passwd=?, name=?, tel=? where id=?";
    
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $passwd,PDO::PARAM_STR);
    $stmh->bindValue(2, $name,PDO::PARAM_STR);
    $stmh->bindValue(3, $tel,PDO::PARAM_STR);
    $stmh->bindValue(4, $idtel,PDO::PARAM_STR);

    $stmh->execute();
    $pdo->commit();
    print "데이터가 수정되었습니다.";
    header("Location:http://localhost/ch08/list.php");
} catch (PDOException $Exception) {
    $pdo->rollBack();
    print "오류 : ".$Exception->getMessage();
}
?>