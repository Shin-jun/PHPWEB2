<?php
$a = setcookie("userid", "shin", time() + 60*60*60);
$b = setcookie("pw", "123456", time() + 60*60*60);

if($a && $b) {
    print "쿠키 'userid'와 'pw' 생성완료!<br>";
    print "쿠키 'pw'는 60초간 지속됨";
}

?>