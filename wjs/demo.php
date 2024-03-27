<?php
    echo "Hello World";
    echo "10"."10"
    $name ="egoing";
    echo "안녕하세요.".$name;
    var_dump(1==1);
    $result=(1==1);
    
    $password=$_GET["password"];
    if($password=="1111"){  //1 0도 되는 듯?
      echo "환영합니다.";
    } else{
      echo "누구세요?";
    }
    
    $list = array("one", "two", "three");
    echo $list[2];
    echo count($list);
?>
