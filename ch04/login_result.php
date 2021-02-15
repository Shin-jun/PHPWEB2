<?php
session_start();

$userid = $_REQUEST["userid"];
$pw = $_REQUEST["pw"];
// $chbox = $_REQUEST["chbox"];

$_SESSION["userid"] = $userid;
// print $_SESSION["userid"];


if(isset($_REQUEST["chbox"]))   // 체크박스
{
    $a = setcookie("userid", $userid, time()+60*60*24);
    $b = setcookie("pw", $pw, time()+60*60*24);
}

if($userid=="admin" && $pw =="123456"){
    print "관리자 로그인";
}else{
?>
<script>alert("아이디와 비밀번호가 틀립니다!");
    history.back();
</script>
<?php
} ?>
