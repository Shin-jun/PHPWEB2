<!DOCTYPE html>
<?php
  $id=$_REQUEST["id"];  // 해당 아이디 수정

  require_once("mydb.php");
  $pdo=db_connect();
?>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>회원정보수정</title>
</head>
<body>
  <?php
    try {
      $sql="select * from member where id=?";
      $stmh=$pdo->prepare($sql);
      $stmh->bindValue(1, $id);
      $stmh->execute();

      $count=$stmh->rowCount();
    
    } catch (PDOException $Exception) {
      print "오류 : ".$Exception->getMessage();
    }

    if($count<1){
      print "수정자가 없습니다<br>";
    } else {
            $row=$stmh->fetch(PDO::FETCH_ASSOC);
  ?>
  <form method = "post" action = "updatePro.php">
    <table border="1">
      <tr>
        <td>이메일</td>
        <td><?=$row['id']?></td>
      </tr>
      <tr>
        <td>비밀번호</td>
        <td><input type="password" name = "passwd" size="20" value="<?=$row['passwd']?>" required></td>
      </tr>
      <tr>
        <td>이름</td>
        <td><input type="text" name = "name" size="20" value="<?=$row['name']?>" required></td>
      </tr>
      <tr>
        <td>전화번호</td>
        <td><input type="text" name = "tel" size="20" value="<?=$row['tel']?>"></td>
      </tr>
      <tr>
        <td colspan = "2" align="center"><input type="submit" value="수정하기">
        </td>
      </tr>
      
    </table>
    <input type="hidden" name="id" value="<?=$id?>">
  </form>
  <?php 
    } 
    ?>
</body>
</html>