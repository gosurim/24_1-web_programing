<?php
echo "<B> 단방향 암호화 함수 </B><br>";
echo "-------------------------<br>";

$char = "ok8563";
echo " >> 원본 비밀번호 : {$char} <br><br>";

$passwd = password_hash($char, PASSWORD_DEFAULT);
echo " >> 암호화된 비밀번호 : {$passwd} <br>";
echo "-------------------------<br>";

if(password_verify($char, $passwd)){
    echo "비밀번호 확인 완료!!<br>";
    echo "-------------------------<br>";
}else {
    echo "비밀번호가 틀렸습니다.<br>";
}


?>