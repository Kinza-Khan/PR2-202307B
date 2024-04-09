<?php
$std = [
    ["ali",21,"karachi"],
    ["aqsa",22,"lahore","aqsa@gmail.com"],
    ["hamza",23]
];

// for loop 
// for($i= 0 ;$i<count($std); $i++){

//         for($j=0; $j<count($std[$i]); $j++){
//                 echo $std[$i][$j] . " ";
//         }

//         echo "<br>";
// }


// FOREACH LOOP

foreach($std as $value){

     foreach($value as $student){

        echo $student . " ";
     }
     echo "<br>";
}

// 
?>