<?php
// 삭제버튼 클릭시
$id = $_REQUEST["id"];

require_once("mydb.php");
$pdo=db_connect();

try {
    $pdo->beginTransaction(); // select 외 해당.
    $sql="delete from member where id=?";
    
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $id,PDO::PARAM_STR);

    $stmh->execute();
    $pdo->commit();
    header("Location:http://localhost/ch08/list.php");  // 삭제 처리후 다시 list.php로 이동
} catch (PDOException $Exception) {
    $pdo->rollBack();
    print "오류 : ".$Exception->getMessage();
}
?>