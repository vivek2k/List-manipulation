<html>
    <body style="margin:100px;background-color:#F5F5F5">
        <?php
            $l1 = $_POST['list1'];
            // echo "$l1";
            // echo "<br>";
            $l1List = explode("\n", $l1);
            $size1 = sizeof($l1List);
            // echo $size1;
            // echo "<br>";

            $l2 = $_POST['list2'];
            // echo "$l2";
            // echo "<br>";
            $l2List = explode("\n", $l2);
            $size2 = sizeof($l2List);
            // echo $size2;
            // echo "<br>";

            $l1List = array_map('trim', $l1List);            
            // var_dump($l1List);
            // echo "<br>";
            $l2List = array_map('trim', $l2List);
            // var_dump($l2List);

            // echo "<br>";
            // echo "<br>";
            // echo "<br>";
            
            $toAdd = array_diff($l1List, $l2List);
            $toRemove = array_diff($l2List, $l1List);
            // echo gettype($toAdd);
            // echo "<br>";    
            // echo sizeof($toAdd);
            // var_dump($toAdd);
            // echo "<br>";
            // echo gettype($toRemove);
            // echo "<br>";
            // echo sizeof($toRemove);
            // var_dump($toRemove);

            // echo "<br>";
            // print_r(implode("<br>", $toAdd));
            // echo "<br>";

            // echo "<br>";
            // print_r(implode("<br>", $toRemove));
            // echo "<br>";

        ?>

<form style="height:500px;width:700px">
        <p style="color:Black;font-size:28px;">To Add :</p><textarea name="removeList" form="stockList" cols="30" rows="10" wrap="hard" style=""><?php print_r(implode("\n",$toAdd)) ?></textarea>    
        <p style="color:Black;font-size:28px;;">To Remove : </p><textarea name="addList" form="stockList" cols="30" rows="10" wrap="hard" style=""><?php print_r(implode("\n", $toRemove)); ?></textarea>    
    </body>
</html>