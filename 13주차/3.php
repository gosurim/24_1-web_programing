<?php
$connect=mysqli_connect ('localhost:33306', 'root', '');
mysqli_select_db($connect, 'sample');

$sql="select * from guest";
$result = mysqli_query ($connect, $sql);
$count = mysqli_num_fields ($result);
?>

<table width='600' border='1' cellpadding='10'>
    <tr>
        <th>아이디</th>
        <th>성명</th>
        <th>성별</th>
        <th>나이</th>
        <th>포인트</th>
        <th>이메일</th>
    </tr>


<?php
while ($rows=mysqli_fetch_row($result)){
    echo "<tr>";
    for($a=0; $a<$count; $a++){
        echo "<td> $rows[$a] </td>"; 
    }echo "</tr>";
}
?>
</table><br>

<?php
mysqli_close($connect);
echo "<hr> >> mysql 접속 정상 종료";
?>