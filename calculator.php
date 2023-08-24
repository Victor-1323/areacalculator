<?php
    if(isset($_POST["radius"])){
        $radius=$_POST["radius"];
        //echo $radius;
        $area= M_PI * $radius * $radius;
        echo $area;
        header("location:index.php?area=$area");
    }

?>