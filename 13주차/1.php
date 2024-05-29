<?php
$connect=mysqli_connect ('localhost:33306', 'root', '');
$db=mysqli_select_db($connect, 'sample');

if($db){
    echo "1. mysql 접속, 데이터베이스 선택 [성공] <br><br>";
}else {
    echo "데이터베이스 접속 실패";
    exit;
}
$sql="CREATE TABLE guest (
    id VARCHAR(12) NOT NULL,
    name VARCHAR(10) NOT NULL,
    sex CHAR(4),
    age INT,
    point INT,
    email VARCHAR(30),
    PRIMARY KEY(id)
    ) DEFAULT CHARSET=utf8;";

$result = mysqli_query ($connect, $sql);

if($result){
    echo "2. 테이블 생성[성공]<br><br>";
}else {
    echo "<hr>";
    echo "테이블 생성 실패<br><br>";
    exit;
}

$sql = "INSERT INTO guest VALUES('user01', 'Ann', 'F', 23, 250, 'ann@google.com')";
mysqli_query($connect, $sql);

$sql = "INSERT INTO guest VALUES('user02', 'Eric', 'M', 37, 308, 'eric@naver.com')";
mysqli_query($connect, $sql);

$sql = "INSERT INTO guest VALUES('user03', 'John', 'F', 19, 123, 'john@google.com')";
mysqli_query($connect, $sql);

$sql = "INSERT INTO guest VALUES('user04', 'Denny', 'M', 45, 569, 'denny@hanmail.com')";
mysqli_query($connect, $sql);

$sql = "INSERT INTO guest VALUES('user05', 'Kelly', 'F', 33, 625, 'kelly@kakao.com')";
$result=mysqli_query($connect, $sql);

if($result){
    echo "3. 레코드 5개 삽입 [성공]<br><br>";
}else {
    echo "<hr>";
    echo "레코드 추가 오류!<br><br>";
    exit;
}

mysqli_close($connect);
echo "4. mysql 접속 정상 종료!!";

?>