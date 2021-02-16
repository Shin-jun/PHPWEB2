<?php
session_start();

unset($_SESSION["userid"]);
unset($_SESSION["pw"]);
setCookie("userid", "");    // 쿠키삭제
header("location:http://localhost/ch04/login_form.php");
?>