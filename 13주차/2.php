<?php
$connect=mysqli_connect ('localhost:33306', 'root', '');
mysqli_select_db($connect, 'sample');

$sql="select * from guest";
$result = mysqli_query ($connect, $sql);
$count = mysqli_num_rows ($result);
echo ">> guest 테이블의 전체 레코드 수: {$count}개<br>";

$count = mysqli_num_fields ($result);
echo ">> guest 테이블의 전체 필드 수: {$count}개<br>";

mysqli_close($connect);
?>