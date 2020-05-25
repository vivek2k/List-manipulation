<html>
    <body style="margin:100px">
        <?php
            $l1 = $_POST['list1'];
            // echo "$l1";
            // echo "<br>";
            $strl1 = strval($l1);
            $size1 = substr_count($l1, ' ');
            // echo $size1;

            $l2 = $_POST['list2'];
            // echo "$l2";
            // echo "<br>";
            $strl2 = strval($l2);
            $size2 = substr_count($strl2, ' ');
                // echo $size2;
                
            $result = shell_exec("python ./python.py $size1 $size2 $strl1 $strl2");
            // echo $result;
            $list = explode('.', $result);
            echo $list[0];
            echo "<br>";
            echo $list[1];
            echo "<br>";
            echo $list[2];
            echo "<br>";
            echo $list[3];
        ?>
    </body>
</html>