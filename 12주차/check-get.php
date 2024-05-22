<html>
    <head><meta charset="utf-8"></head>
    <body>
    나의 취미:
    <?php
        $num=count($_GET["hobby"]);

            for($i=0; $i<$num; $i++){
                echo $_GET["hobby"][$i];
                if($i!=$num-1) 
                    echo ", ";
            }
        ?>
    </body>
</html>