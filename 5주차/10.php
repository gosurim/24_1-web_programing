<?php
$a = 3;
$b = 5;
$c = $a+$b;
echo "\$c : $c";
echo"<br>";

$c++;
$c = $c+$a;
$d = $a+$c*$b;

echo "\$d : $d";
echo"<br>";

$a = 10;
$b = $a%3;
$b--;
echo "\$b : $b";
echo"<br>";

$c = $a-$b;
$c = $c-5;
echo "\$c : $c";
?>