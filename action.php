<html>
    <body style="margin:100px;background-color:#F5F5F5">
        <?php
            $l1 = $_POST['list1'];
            // echo "$l1";
            $l1List = explode("\n", $l1);
            $il1List = implode(" ", $l1List);
            // echo "<br>";
            $strl1 = strval($il1List);
            $size1 = substr_count($il1List, ' ');
            // echo $size1;

            // echo "<br>";
            // echo "<br>";
            // echo "Imploaded list : ";
            // echo $imploadedl1List;
            // echo "<br>";
            // echo "<br>";
            $strl1 = strval($il1List);

            $l2 = $_POST['list2'];
            // echo "$l2";
            // echo "<br>";
            $l2List = explode("\n", $l2);
            $il2List = implode(" ", $l2List);
            $strl2 = strval($il2List);
            $size2 = substr_count($strl2, ' ');
            // echo $size2;

            $result = shell_exec("python ./python.py $size1 $size2 $strl1 $strl2");
            // echo $result;
            $list = explode('.', $result);
            echo $list[0];
            echo "<br>";
            echo $list[1];
            echo "<br>";
            echo "<br>";
            // echo ($size1);
            echo "<br>";
            // echo $size2;
            $strRem = strval($list[3]); 
            // echo strlen($strRem);
            $strAdd = strval($list[2]); 
            // echo strlen($strAdd);
            // echo $strAdd;
            // echo $listTemp;
            // echo gettype($list);
        ?>

        <form style="height:500px;width:700px">
        <p style="color:Black;font-size:28px;">To Add :</p><textarea name="removeList" form="stockList" cols="30" rows="10" wrap="hard" style="">
        <?php 
            for($i=0;$i<strlen($strAdd);$i=$i+1) {
                if($strAdd[$i]=='\''||$strAdd[$i]=='{'|$strAdd[$i]=='}'||$strAdd[$i]==',') {
                    continue;
                }
                else if($strAdd[$i]== ' ') {
                    echo "\n";
                }
                else {
                    echo $strAdd[$i];

                }  
            }
        ?>
        </textarea>    
        <p style="color:Black;font-size:28px;;">To Remove : </p><textarea name="addList" form="stockList" cols="30" rows="10" wrap="hard" style="">
        <?php 
            for($i=0;$i<strlen($strRem);$i=$i+1) {
                if($strRem[$i]=='\''||$strRem[$i]=='{'|$strRem[$i]=='}'||$strRem[$i]==',') {
                    continue;
                }
                else if($strRem[$i]== ' ') {
                    echo "\n";
                }
                else {
                    echo $strRem[$i];

                }  
            }
        ?>
        </textarea>    
        
    </body>
</html>