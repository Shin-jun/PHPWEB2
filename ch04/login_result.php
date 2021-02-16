<?php
session_start();

$userid = $_REQUEST["userid"];
$pw = $_REQUEST["pw"];
// $chbox = $_REQUEST["chbox"];



if($userid=="admin" && $pw =="123456"){    
    
    if(isset($_REQUEST["chbox"]))   // 체크박스
    {
    $a = setcookie("userid", $userid, time()+60*60*24);
    $b = setcookie("pw", $pw, time()+60*60*24);                 // 로그인 성공시 쿠키파일로 아이디와 비밀번호를 남긴다.
    }

    $_SESSION["userid"] = $userid;                              // 관리자 아이디 로그인 성공시
    header("Location:http://localhost/ch04/login_form.php");    // 절대경로
    exit;
}else{ 
?>
<script>alert("아이디와 비밀번호가 틀립니다!");
    history.back();
</script>
<?php
} ?>
