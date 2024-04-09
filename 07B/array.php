<?php
$stdNames = ["ali",21,"karachi", "BS"];
echo $stdNames[1] . " " . $stdNames[0] . " " . $stdNames[2];
echo "<h1>".$stdNames[2]. "</h1>";
?>
<h1><?php echo $stdNames[2]?></h1>
<!-- hum single dimensional index array with  for loop -->
<?php
// for($i = 0 ; $i<=2 ; $i++ ){
//         echo $stdNames[$i] . "<br>";
// }


// by using count
for($i = 0 ; $i<count($stdNames) ; $i++ ){
        echo $stdNames[$i] . "<br>";
}
?>
