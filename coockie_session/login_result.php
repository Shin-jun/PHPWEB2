<?php
session_start();

$userid = $_REQUEST["userid"];
$pw = $_REQUEST["pw"];
$chbox = $_REQUEST["chbox"];

$_SESSION["userid"] = $userid;


if($chbox!=null){
    $a = setcookie("userid", "shin", time()+60*60*60);
    $b = setcookie("pw", "123456", time()+60*60*60);
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
