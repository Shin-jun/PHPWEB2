<?php
  session_start();

  $userid = $_REQUEST["userid"];
  $pw = $_REQUEST["pw"];

if($userid=="admin" && $pw == "123456")
{
  if(isset($_REQUEST["chbox"])){
    $a = setcookie("userid", $userid, time()+60*60*24);
    $b = setcookie("pw", $pw, time()+60*60*24);
  }

  $_SESSION["userid"] = $userid;  // 관리자 로그인 성공시
  print $_SESSION["userid"];
  header("location:http://localhost/ch08/login_form.php");
  exit;
}else