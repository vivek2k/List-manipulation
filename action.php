<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body style=";background-color:#F5F5F5;margin-top:15px">
    
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
    <div><p class="header"> List comparator </p></div>
    <div class="container border" style="height: fit-content;width: fit-content;">
        <div class="row">
            <div class="col-6">
                <p >List to Add:</p>
            </div>
            <div class="col-6">
                <p >List to Remove:</p>
            </div>
        </div>
        <form action="./action.php" method="POST" id="stockList" style="height:auto;width:auto;">
            <div class="row">
                <div class="col "><textarea name="removeList" form="stockList" cols="30" rows="10" wrap="hard" style=""><?php print_r(implode("\n",$toAdd)) ?></textarea></div>
                <div class="col "><textarea name="addList" form="stockList" cols="30" rows="10" wrap="hard" style=""><?php print_r(implode("\n", $toRemove)); ?></textarea></div>  
           </div>
        </div>
    </div>
    <div style="float:right;position:absolute;bottom:10px;right:10px">
            <span> Created by Vivekanandan. </span><br>
            <a style="float:right" href="https://github.com/vivek2k">Github</a>
            <br>
            <a style="float:right" href="https://www.instagram.com/vivekanandan._.mariappan/">Instagram</a>

        </div>
    </body>
</html>