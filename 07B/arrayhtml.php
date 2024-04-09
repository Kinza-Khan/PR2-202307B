<?php
$stdNames = ["ali",21,"karachi", "BS"];
?>
<ul>
    <?php
    for($i = 0 ; $i<count($stdNames); $i++){
        ?>
        <li><?php echo $stdNames[$i]?></li>
    <?php    
    }
    ?>
</ul>
<!--  yahan sy foreach start ha -->
<h1>foreach loop</h1>
<ul>
   <?php
    foreach($stdNames  as $value){
        ?>
        <li><?php echo $value ?></li>

        <?php
    }
   
   ?>
</ul>